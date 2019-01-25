<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegraTabela
 *
 * @author Renan
 */
class PedidoEntrada {

    public $id;
    public $fornecedor;
    public $frete;
    public $status;
    public $excluido;
    public $usuario;
    public $transportadora;
    public $data;
    public $produtos;
    public $frete_incluso;
    public $nota;
    public $observacoes;
    public $prazo;
    public $parcelas;

    function __construct() {

        $this->id = 0;
        $this->fornecedor = null;
        $this->frete = 0;
        $this->status = null;
        $this->excluida = false;
        $this->usuario = null;
        $this->empresa = null;
        $this->data = round(microtime(true) * 1000);
        $this->produtos = null;
    }

    public function getProdutos($con) {

        $campanhas = array();
        $ofertas = array();

        $ps = $con->getConexao()->prepare("SELECT campanha.id,campanha.inicio,campanha.fim,campanha.prazo,campanha.parcelas,campanha.cliente_expression,produto_campanha.id,produto_campanha.id_produto,UNIX_TIMESTAMP(produto_campanha.validade)*1000,produto_campanha.limite,produto_campanha.valor FROM campanha INNER JOIN produto_campanha ON campanha.id = produto_campanha.id_campanha WHERE campanha.inicio>=CURRENT_TIMESTAMP AND campanha.fim<=CURRENT_TIMESTAMP AND campanha.excluida=false");
        $ps->execute();
        $ps->bind_result($id, $inicio, $fim, $prazo, $parcelas, $cliente, $id_produto_campanha, $id_produto, $validade, $limite, $valor);

        while ($ps->fetch()) {

            if (!isset($campanhas[$id])) {

                $campanhas[$id] = new Campanha();
                $campanhas[$id]->id = $id;
                $campanhas[$id]->inicio = $inicio;
                $campanhas[$id]->fim = $fim;
                $campanhas[$id]->prazo = $prazo;
                $campanhas[$id]->parcelas = $parcelas;
                $campanhas[$id]->cliente = $cliente;
            }

            $campanha = $campanhas[$id];

            $p = new ProdutoCampanha();
            $p->id = $id_produto_campanha;
            $p->validade = $validade;
            $p->limite = $limite;
            $p->valor = $valor;
            $p->campanha = $campanha;

            if (!isset($ofertas[$id_produto])) {

                $ofertas[$id_produto] = array();
            }

            $ofertas[$id_produto][] = $p;
        }

        $ps->close();

        $ps = $con->getConexao()->prepare("SELECT produto_cotacao_entrada.id,"
                . "produto_cotacao_entrada.quantidade,"
                . "produto_cotacao_entrada.valor,"
                . "produto.id,"
                . "produto.id_universal,"
                . "produto.liquido,"
                . "produto.quantidade_unidade,"
                . "produto.habilitado,"
                . "produto.valor_base,"
                . "produto.custo,"
                . "produto.peso_bruto,"
                . "produto.peso_liquido,"
                . "produto.estoque,"
                . "produto.disponivel,"
                . "produto.transito,"
                . "produto.grade,"
                . "produto.unidade,"
                . "produto.ncm,"
                . "produto.nome,"
                . "produto.lucro_consignado,"
                . "categoria_produto.id,"
                . "categoria_produto.nome,"
                . "categoria_produto.base_calculo,"
                . "categoria_produto.ipi,"
                . "categoria_produto.icms_normal,"
                . "categoria_produto.icms"
                . " FROM produto_cotacao_entrada "
                . "INNER JOIN produto ON produto_cotacao_entrada.id_produto=produto.id "
                . "INNER JOIN categoria_produto ON categoria_produto.id=produto.id_categoria"
                . " WHERE produto_cotacao_entrada.id_cotacao=$this->id");


        $ps->execute();
        $ps->bind_result($id, $quantidade, $valor, $id_pro, $id_uni, $liq, $qtd_un, $hab, $vb, $cus, $pb, $pl, $est, $disp, $tr, $gr, $uni, $ncm, $nome, $lucro, $cat_id, $cat_nom, $cat_bs, $cat_ipi, $cat_icms_normal, $cat_icms);

        $retorno = array();


        while ($ps->fetch()) {

            $p = new Produto();
            $p->id = $id_pro;
            $p->nome = $nome;
            $p->id_universal = $id_uni;
            $p->liquido = $liq;
            $p->quantidade_unidade = $qtd_un;
            $p->habilitado = $hab;
            $p->valor_base = $vb;
            $p->custo = $cus;
            $p->peso_bruto = $pb;
            $p->peso_liquido = $pl;
            $p->estoque = $est;
            $p->disponivel = $disp;
            $p->transito = $tr;
            $p->grade = new Grade($gr);
            $p->unidade = $uni;
            $p->ncm = $ncm;
            $p->lucro_consignado = $lucro;
            $p->empresa = $this->empresa;
            $p->ofertas = (!isset($ofertas[$p->id]) ? array() : $ofertas[$p->id]);

            $p->categoria = new CategoriaProduto();

            $p->categoria->id = $cat_id;
            $p->categoria->nome = $cat_nom;
            $p->categoria->base_calculo = $cat_bs;
            $p->categoria->icms = $cat_icms;
            $p->categoria->icms_normal = $cat_icms_normal;
            $p->categoria->ipi = $cat_ipi;

            $pp = new ProdutoCotacaoEntrada();
            $pp->id = $id;
            $pp->quantidade = $quantidade;
            $pp->valor = $valor;
            $pp->cotacao = $this;
            $pp->produto = $p;


            $retorno[$pp->id] = $pp;
        }

        $ps->close();

        $real_ret = array();

        foreach ($retorno as $key => $value) {

            $real_ret[] = $value;
        }

        return $real_ret;
    }

    public function merge($con) {

        if ($this->id == 0) {

            $ps = $con->getConexao()->prepare("INSERT INTO pedido_entrada(id_fornecedor,id_transportadora,frete,observacoes,frete_inclusao,id_empresa,data,excluido,id_usuario,id_nota,prazo,parcelas,id_status) VALUES(" . $this->fornecedor->id . "," . $this->transportadora->id . "," . $this->frete . "," . $this->observacoes . "," . ($this->frete_inclusao ? "true" : "false") . "," . $this->empresa->id . ",FROM_UNIXTIME($this->data/1000),false," . $this->usuario->id . "," . ($this->nota != null ? $this->nota->id : 0) . ",$this->prazo,$this->parcelas," . $this->status->id . ")");
            $ps->execute();
            $this->id = $ps->insert_id;
            $ps->close();

        } else {

            $ps = $con->getConexao()->prepare("INSERT INTO pedido_entrada(id_fornecedor,id_transportadora,frete,observacoes,frete_inclusao,id_empresa,data,excluido,id_usuario,id_nota,prazo,parcelas,id_status) VALUES(" . $this->fornecedor->id . "," . $this->transportadora->id . "," . $this->frete . "," . $this->observacoes . "," . ($this->frete_inclusao ? "true" : "false") . "," . $this->empresa->id . ",FROM_UNIXTIME($this->data/1000),false," . $this->usuario->id . "," . ($this->nota != null ? $this->nota->id : 0) . ",$this->prazo,$this->parcelas," . $this->status->id . ")");
            $ps->execute();
            $ps->close();
        }

        $prods = $this->getProdutos($con);

        foreach ($prods as $key => $value) {

            foreach ($this->produtos as $key2 => $value2) {

                if ($value->id == $value2->id) {

                    continue 2;
                }
            }

            $value->delete($con);
        }

        foreach ($this->produtos as $key2 => $value2) {

            $value2->merge($con);
        }
    }

    public function delete($con) {

        $ps = $con->getConexao()->prepare("UPDATE cotacao_entrada SET excluida=true WHERE id = " . $this->id);
        $ps->execute();
        $ps->close();
    }

}

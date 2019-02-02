rtc.service('clienteService', function ($http, $q) {
    this.getCliente = function(fn){   
        baseService($http,$q,{
            query:"$r->cliente=new Cliente();$r->cliente->empresa=$empresa",
            sucesso:fn,
            falha:fn
        });   
    }
    this.setDocumentos = function(cliente,documentos,fn){   
        baseService($http,$q,{
            o:{cliente:cliente,documentos:documentos},
            query:"$o->cliente->setDocumentos($o->documentos,$c)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.getDocumentos = function(cliente,fn){   
        baseService($http,$q,{
            o:cliente,
            query:"$r->documentos=$o->getDocumentos($c)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.getCount = function(filtro,fn){  
        baseService($http,$q,{
            o:{filtro:filtro},
            query:"$r->qtd=$empresa->getCountClientes($c,$o->filtro)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.getElementos = function(x0,x1,filtro,ordem,fn){ 
        baseService($http,$q,{
            o:{x0:x0,x1:x1,filtro:filtro,ordem:ordem},
            query:"$r->elementos=$empresa->getClientes($c,$o->x0,$o->x1,$o->filtro,$o->ordem)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('telefoneService', function ($http, $q) {
    this.getTelefone = function(fn){   
        baseService($http,$q,{
            query:"$r->telefone=new Telefone()",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('cidadeService', function ($http, $q) {
    this.getElementos = function(fn){   
        baseService($http,$q,{
            query:"$r->elementos=Sistema::getCidades($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('documentoService', function ($http, $q) {
    this.getDocumento = function(fn){   
        baseService($http,$q,{
            query:"$r->documento=new Documento()",
            sucesso:fn,
            falha:fn
        });   
    }
    
})
rtc.service('categoriaDocumentoService', function ($http, $q) {
    this.getElementos = function(fn){   
        baseService($http,$q,{
            query:"$r->elementos=Sistema::getCategoriaDocumentos($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('categoriaClienteService', function ($http, $q) {
    this.getElementos = function(fn){   
        baseService($http,$q,{
            query:"$r->elementos=Sistema::getCategoriaCliente($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('categoriaProdutoService', function ($http, $q) {
    this.getElementos = function(fn){   
        baseService($http,$q,{
            query:"$r->elementos=Sistema::getCategoriaProduto($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('pragaService', function ($http, $q) {
    this.getElementos = function(fn){   
        baseService($http,$q,{
            query:"$r->pragas=Sistema::getPragas($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('culturaService', function ($http, $q) {
    this.getElementos = function(fn){   
        baseService($http,$q,{
            query:"$r->culturas=Sistema::getCulturas($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('receituarioService', function ($http, $q) {
    this.getReceituario = function(fn){   
        baseService($http,$q,{
            query:"$r->receituario=new Receituario()",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('baseService', function ($http, $q) {
    this.delete = function(obj,fn){   
        baseService($http,$q,{
            o:obj,
            query:"$o->delete($c)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.merge = function(obj,fn){   
        baseService($http,$q,{
            o:obj,
            query:"$o->merge($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('produtoService', function ($http, $q) {
    this.getProduto = function(fn){   
        baseService($http,$q,{
            query:"$r->produto=new Produto();$r->produto->empresa=$empresa",
            sucesso:fn,
            falha:fn
        });   
    }
    this.getReceituario = function(produto,fn){   
        baseService($http,$q,{
            o:produto,
            query:"$r->receituario=$o->getReceituario($c)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.getCount = function(filtro,fn){  
        baseService($http,$q,{
            o:{filtro:filtro},
            query:"$r->qtd=$empresa->getCountProdutos($c,$o->filtro)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.getElementos = function(x0,x1,filtro,ordem,fn){   
        baseService($http,$q,{
            o:{x0:x0,x1:x1,filtro:filtro,ordem:ordem},
            query:"$r->elementos=$empresa->getProdutos($c,$o->x0,$o->x1,$o->filtro,$o->ordem)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('acessoService', function ($http, $q) {
    this.getAcesso = function(fn){   
        baseService($http,$q,{
            query:"$r->usuario=$ses->get('usuario');$r->empresa=$ses->get('empresa');$r->logo=$r->empresa->getLogo($c)",
            sucesso:fn,
            falha:fn
        });   
    }
})
rtc.service('loginService', function ($http, $q) {
    this.login = function(usuario,senha,fn){   
        baseService($http,$q,{
            o:{u:usuario,s:senha},
            query:"$r->usuario=Sistema::logar($o->u,$o->s)",
            sucesso:fn,
            falha:fn
        });   
    }
    this.recuperar = function(email,fn){
        baseService($http,$q,{
            o:{email:email},
            query:"$u=Sistema::getUsuario(\"email.endereco='$o->email'\");if($u==null)throw new Exception('');$s=Sistema::getEmailSistema();$s->enviarEmail($u->email,'Recuperacao de Senha',Sistema::getHtml('rec_sen',$u))",
            sucesso:fn,
            falha:fn
        });   
    }
})



<?php

use App\Controller\CorrentistaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/teste':
        CorrentistaController::teste();
    break;

    case '/correntista/save':
        CorrentistaController::salvar();
    break;
    
    case '/correntista/listar':
        CorrentistaController::listar();
    break;

    case '/correntista/entrar':
        
    break;

    case '/conta/pix/enviar':
        
    break;

    case '/conta/pix/receber':
       
    break;

    case '/conta/extrato':
        
    break;

    default:
        http_response_code(403);
        //echo $url;
    break;
}
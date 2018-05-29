<?php
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();
    
    $title = 'this is a test';
    $header = 'look at me';
    $content = 'my first smarty test';

    $smarty->assign('title', $title);
    $smarty->assign('header', $header);
    $smarty->assign('content', $content);

    $smarty->display('templates/test.tpl');
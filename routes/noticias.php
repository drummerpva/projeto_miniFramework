<?php
$this->get('noticias', function ($arg) {
    $tpl = $this->core->loadModule('template');
    $news = $this->core->loadModule('news');
    $array = [];
    $array['news'] = $news->getNewsList();

    $tpl->render('noticiasLista', $array);
});

$this->post('noticias', function ($arg) {
    echo "Enviou por POST";
});

$this->get('noticias/{id}', function ($arg) {
    $tpl = $this->core->loadModule('template');
    $news = $this->core->loadModule('news');
    $array = [];
    $array['info'] = $news->getNewsInfo($arg['id']);

    $tpl->render('noticiasItem', $array);
});

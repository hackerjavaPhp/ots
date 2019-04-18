<?php


namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    protected function setMeta ( $title = null, $keywords = null, $description = null ) {
        $this->view->title = $title;
        $this->view->registerCsrfMetaTags(['name' => 'keywords',
                                            'content' => "$keywords"]);
        $this->view->registerCsrfMetaTags(['name' => 'description',
            'content' => "$description"]);
    }
}
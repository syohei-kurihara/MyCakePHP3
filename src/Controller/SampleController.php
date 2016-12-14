<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake¥ORM¥TableRegistry;


class SampleController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->layout('sample');
    }

    public function index($bg_num = 1)
    {
        $this->set('bg_path', '/img/back_'.$bg_num);

        $this->sample = TableRegistry::get('sample');
        $bg_path = $this->sample->find()->all();
        $this->set(conpact('bg_path'));
    }
}

?>
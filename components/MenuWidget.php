<?php
/**
 * Created by PhpStorm.
 * User: a.zhidkov
 * Date: 16.08.2018
 * Time: 15:03
 */

namespace app\components;

use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;

    public function init(){
        parent::init();
        if ($this->tpl === null)
            $this->tpl = 'menu';

        $this->tpl .= '.php';
    }

    public function run(){
        return $this->tpl;
    }

}
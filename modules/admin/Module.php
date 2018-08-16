<?php
namespace app\modules\admin;


/**
 * Модуль админки
 */
class Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\commands';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * Определяем параметры загрузки модуля
     *
     * @param \yii\console\Application $app
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'app\modules\admin\commands';
        }
    }
}
?>
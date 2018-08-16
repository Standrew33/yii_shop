<?php
/**
 * Created by PhpStorm.
 * User: a.zhidkov
 * Date: 16.08.2018
 * Time: 14:51
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: a.zhidkov
 * Date: 16.08.2018
 * Time: 14:51
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return 'category';
    }

    public function getProduct(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
<?php

namespace app\module\admin\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $category_id
 * @property string $created
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $file;
     
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['file'], 'file'],
            [['text'], 'string'],
            [['title','foto', 'created'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ІД',
            'foto'=>'Фото',
            'title' => 'Назва товара',
            'text' => 'Опис товара',
            'category_id' => 'Категорія',
            'created' => 'Дата створення',
            'file'=>'Добавити фото'
        ];
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
    
    
}

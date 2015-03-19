<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class UserForm extends Model
{
    public $username;
    public $password;

      
      
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
         
        ];
    }
}
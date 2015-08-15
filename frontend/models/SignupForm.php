<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repeatPassword;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required','message' => '用户名不能为空'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '用户名已经被占用'],
            ['username', 'string','min' => 2, 'max' => 25,'tooLong' => '用户名过长' ,'tooShort' => '用户名不能少于两个字符'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required','message'=>'邮箱不能为空'],
            ['email', 'email','message' => '电子邮箱不是有效的邮箱地址'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '此邮箱已经被占用'],

            ['password', 'required', 'message' => '密码不能为空'],
            ['password', 'string', 'min' => 6,'tooShort' => '密码不能少于六位'],


            ['repeatPassword', 'required', 'message' => '密码不能为空'],
            ['repeatPassword', 'string', 'min' => 6,'tooShort' => '密码不能少于六位'],

            ['repeatPassword','compare','compareAttribute' => 'password','message' => '两次密码不一致'],

            ['verifyCode', 'required','message' => '验证码不能为空'],
            ['verifyCode', 'captcha','message' => '验证码不正确'],
        ];
    }

    //设置标签的显示名字
    public function attributeLabels() {
        return array(
            "username" => "用户名",
            "password" => "密码",
            "repeatPassword" => "确认密码",
            "email" => "电子邮箱",
            'verifyCode' => '验证码'
        );
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
                $user = new User();
                $user->username = $this->username;
                $user->email = $this->email;
                $user->setPassword($this->password);
                $user->generateAuthKey();
                $user->save();
                return $user;
            }
        return null;
    }
}

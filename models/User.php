<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $isAdmin
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isAdmin'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
        ];
    }

    public static function findIdentity($id) {

        return User::findOne($id);
    }

    public function getId() {

        return $this->id;
    }

    public function getAuthKey() {

    }

    public function validateAuthKey($authKey) {

    }

    public static function findIdentityByAccessToken($token, $type = null) {

    }

    public static function findByUsername($username) {

        return User::find()->where(['name' => $username])->one();
    }

    public function validatePassword($password) {

        return ($this->password == $password) ? true : false;
    }
}

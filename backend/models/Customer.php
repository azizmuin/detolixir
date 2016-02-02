<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $customer_id
 * @property string $customer_nama
 * @property string $customer_alamat
 * @property string $customer_no_hp
 * @property string $customer_email
 * @property string $customer_password
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'customer_nama', 'customer_alamat', 'customer_no_hp', 'customer_email', 'customer_password'], 'required'],
            [['customer_id'], 'integer'],
            [['customer_alamat'], 'string'],
            [['customer_nama', 'customer_email', 'customer_password'], 'string', 'max' => 50],
            [['customer_no_hp'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'ID',
            'customer_nama' => 'Nama',
            'customer_alamat' => 'Alamat',
            'customer_no_hp' => 'No Hp',
            'customer_email' => 'Email',
            'customer_password' => 'Password',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_makanan".
 *
 * @property int $id
 * @property string $makanan
 * @property string $jenis
 */
class JenisMakanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_makanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['makanan', 'jenis'], 'required'],
            [['makanan', 'jenis'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'makanan' => 'Makanan',
            'jenis' => 'Jenis',
        ];
    }
}

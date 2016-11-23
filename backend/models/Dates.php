<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dates".
 *
 * @property integer $id
 * @property string $dates
 */
class Dates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['dates'], 'required'],
            [['dates'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dates' => 'Dates',
        ];
    }
}

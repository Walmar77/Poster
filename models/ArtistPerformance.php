<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artist_performance".
 *
 * @property integer $id
 * @property integer $artist_id
 * @property integer $performance_id
 */
class ArtistPerformance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist_performance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artist_id', 'performance_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artist_id' => 'Artist ID',
            'performance_id' => 'Performance ID',
        ];
    }
}

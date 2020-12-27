<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property int $id
 * @property string $todo_name
 * @property int $status
 * @property string $created_at
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['todo_name', 'status'], 'required'],
            [['status'], 'integer'],
            [['created_at'], 'safe'],
            [['todo_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'todo_name' => 'Todo Name',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}

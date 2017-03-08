<?php

use yii\db\Migration;

/**
 * Handles the creation of table `performance`.
 */
class m170308_121009_create_performance_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('performance', [
            'id'   => $this->primaryKey(),
            'name' => $this->string(),
            'date' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('performance');
    }
}

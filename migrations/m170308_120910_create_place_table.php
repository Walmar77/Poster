<?php

use yii\db\Migration;

/**
 * Handles the creation of table `place`.
 */
class m170308_120910_create_place_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('place', [
            'id'   => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('place');
    }
}

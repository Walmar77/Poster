<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artist_performance`.
 */
class m170308_121225_create_artist_performance_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artist_performance', [
            'id'             => $this->primaryKey(),
            'artist_id'      => $this->integer(),
            'performance_id' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('artist_performance');
    }
}

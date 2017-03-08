<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artist`.
 */
class m170308_120806_create_artist_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artist', [
            'id'      => $this->primaryKey(),
            'name'    => $this->string(),
            'surname' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('artist');
    }
}

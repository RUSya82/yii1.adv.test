<?php

use yii\db\Migration;

/**
 * Class m200114_141948_create_table_task
 */
class m200114_141948_create_table_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id'=>$this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'executor_id' => $this->integer()->comment('Исполнитель'),
            'started_at' => $this->integer(),
            'completed_at' => $this->integer(),
            'creator_id' => $this->integer()->notNull(),
            'updater_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200114_141948_create_table_task cannot be reverted.\n";

        return false;
    }
    */
}

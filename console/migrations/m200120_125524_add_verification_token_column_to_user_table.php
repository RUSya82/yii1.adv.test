<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m200120_125524_add_verification_token_column_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'verification_token', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'access_token', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'avatar', $this->string()->defaultValue(null));

    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'verification_token');
        $this->dropColumn('{{%user}}', 'access_token');
        $this->dropColumn('{{%user}}', 'avatar');
    }
}

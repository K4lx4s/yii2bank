<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170213_124909_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(20)->notNull()->unique(),
            'name' => $this->string(50)->notNull(),
            'password' => $this->string(40)->notNull(),
            'email' => $this->string(50)->notNull(),
            'address' => $this->text(100)->notNull(),
            'current_balance' => $this->float(10,2)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}

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

        /* populate the database with 10 existing users users*/
        defined('EXISTING_USERS') or define('EXISTING_USERS', 10);
        for ($cur_user=1;$cur_user<EXISTING_USERS+1;$cur_user++){
        $this->insert('users', [
            'username' => 'client'."$cur_user",
            'password' => 'strong*password*of*client*'."$cur_user",
            'name' => 'firstname'."$cur_user".' lastname'."$cur_user",
            'email' => 'client'."$cur_user".'@domain'."$cur_user".'.com',
            'address' => 'address of client'."$cur_user",
            'current_balance' => 10000.00
        ]);
        }        
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}

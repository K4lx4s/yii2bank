<?php

use yii\db\Migration;

/**
 * Handles the creation of table `transactions`.
 */
class m170213_134005_create_transactions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('transactions', [
            'tr_id' => $this->primaryKey(),
            'date' => $this->dateTime()->notNull(),
            'creditor_id' => $this->integer(11)->notNull(),
            'debitor_id' => $this->integer(11)->notNull(),
            'amount' => $this->float(10,2)->notNull()

        ]);
        
        /* connecting creditos and debidors ids with user ids of */
        $this->addForeignKey(
            'fk-transactions-creditor_id',
            'transactions',
            'creditor_id',
            'users',
            'id'
        );

            $this->addForeignKey(
            'fk-transactions-debitor_id',
            'transactions',
            'debitor_id',
            'users',
            'id'
            );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-transactions-creditor_id',
            'transactions'
        );

        $this->dropForeignKey(
            'fk-transactions-debitor_id',
            'transactions'
        );
        
        $this->dropTable('transactions');
    }
}

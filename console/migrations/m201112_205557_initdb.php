<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m201112_205557_initdb
 */
class m201112_205557_initdb extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('client', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING,
            'last_name' => Schema::TYPE_STRING,
            'hash' => Schema::TYPE_STRING,
            'login' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'status'=> Schema::TYPE_INTEGER,
        ]);

        $this->createTable('manager', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING,
            'last_name' => Schema::TYPE_STRING,
            'hash' => Schema::TYPE_STRING,
            'login' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'status'=> Schema::TYPE_INTEGER,
        ]);

        $this->createTable('call', [
            'manager_id' => Schema::TYPE_INTEGER,
            'client_id' => Schema::TYPE_INTEGER,
            'start_time' => Schema::TYPE_DATE,
            'status' => Schema::TYPE_INTEGER, 
        ]);

        $this->addForeignKey('fk-call-client_id', 'call', 'client_id', 'client', 'id', 'CASCADE');
        $this->addForeignKey('fk-call-manager_id', 'call', 'manager_id', 'manager', 'id', 'CASCADE');

        $this->createTable('course', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'url' => Schema::TYPE_STRING,
            'cost' => Schema::TYPE_MONEY,
        ]);
    }

    public function down()
    {
        echo "m201112_205557_initdb cannot be reverted.\n";

        return false;
    }
}

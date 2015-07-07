<?php

use yii\db\Schema;
use yii\db\Migration;

class m150707_114536_create_country_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_countries', array(
            'code' => 'char(2) NOT NULL PRIMARY KEY',
            'name' => 'CHAR(52) NOT NULL',
            'population' => "INT(11) NOT NULL DEFAULT '0'",
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_countries');
        echo "m150707_114536_create_country_table cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}

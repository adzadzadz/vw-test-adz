<?php

class m210421_154911_webinar_attendees extends CDbMigration
{
  /**
   * ADZ NOTES:
   * 
   * Simplifying the array can be done but the string produced won't
   * be an exact copy from the instruction provided
   * 
   * CREATE TABLE `webinar_attendees` (
   *    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
   *    `first_name` varchar(15) DEFAULT NULL,
   *    `last_name` varchar(15) DEFAULT NULL,
   *    `email` varchar(255) DEFAULT NULL,
   *    `ip_addr` varchar(15) DEFAULT NULL,
   *    `created_on` datetime NOT NULL,
   *    PRIMARY KEY (`id`)
   * ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
   * 
   * @return void
   */
	public function up()
	{
    $this->createTable('{{webinar_attendees}}', [
      'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
      'first_name' => 'varchar(15) DEFAULT NULL',
      'last_name' => 'varchar(15) DEFAULT NULL',
      'email' => 'string DEFAULT NULL',
      'ip_addr' => 'varchar(15) DEFAULT NULL',
      'created_on' => 'datetime NOT NULL',
      'PRIMARY KEY (`id`)'
    ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
	}

	public function down()
	{
		echo "m210421_154911_vw_test does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
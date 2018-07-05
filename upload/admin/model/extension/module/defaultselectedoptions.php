<?php
class ModelExtensionModuleDefaultselectedoptions extends Model {

	public function install() {
		$check_column = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product_option_value` WHERE `field` = 'is_default'");
		if (!$check_column->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_option_value` ADD COLUMN  `is_default` int NOT NULL DEFAULT '0' COMMENT ''");
		}
	}
}
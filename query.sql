CREATE TABLE `users` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(100) NOT NULL,
	`surname` VARCHAR(100) NOT NULL,
	`email` INT(11) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	`gender` VARCHAR(15) NOT NULL,
	`age` VARCHAR(15) NOT NULL,
	`skills` VARCHAR(15) NOT NULL,
	`about` VARCHAR(1000) NOT NULL COLLATE,
	`file` INT(11) NOT NULL,)
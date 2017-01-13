DROP TABLE IF EXISTS `category_events`;
DROP TABLE IF EXISTS `categories`;
DROP TABLE IF EXISTS `events`;

CREATE TABLE `events`
(
    `id`    INT AUTO_INCREMENT PRIMARY KEY,
    `start` DATETIME NOT NULL,
    `end`   DATETIME NULL,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT
);

CREATE TABLE `categories`
(
    `id`   INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL UNIQUE,
    `description` TEXT
);

CREATE TABLE `category_events`
(
    `category_id` INT NOT NULL,
    `event_id`    INT NOT NULL,
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`),
    FOREIGN KEY (`event_id`)    REFERENCES `events`    (`id`),
    PRIMARY KEY (`category_id`, `event_id`)
);

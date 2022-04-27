

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `age` int NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

INSERT INTO `funcionarios` VALUES (1, 'Roberto Carlos', 'roberto@mail.com', 32, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (2, 'Ronaldo Nazaro', 'ronaldo@mail.com', 29, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (4, 'Carlitos Tevez', 'carlitos@mail.com', 42, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (5, 'Tulio Maravilha', 'tulio@mail.com', 48, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (6, 'Kevin De Bruyne', 'kevin@mail.com', 37, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (7, 'Sadio Mane', 'mane@mail.com', 44, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (8, 'Kylian Mbappé', 'kylian@mail.com', 49, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (9, 'Mohamed Salah', 'salah@mail.com', 51, 'Jogador', '2022-04-27 01:05:45');
INSERT INTO `funcionarios` VALUES (19, 'Neimar Jr', 'njr@mail.com', 25, 'Jogador', '2022-04-27 01:05:45');

SET FOREIGN_KEY_CHECKS = 1;

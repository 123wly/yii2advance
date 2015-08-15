/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-08-15 17:21:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1439274423');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1439274464');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'Sx3IQ16sGJnXJH0HBXXGsSRAV481KK4_', '$2y$13$Py4g31XCnoV1VZp1pvVIv.ZYyiECCqjqlgGJPJkvjmSI9w9Fclax6', 'uNqi37EEwgkaNFWMKU66XoMpYjduyK_X_1439634467', '123wly@sina.cn', '10', '10', '1439274873', '1439606273');
INSERT INTO `user` VALUES ('2', 'admin2', 'MhLRyhJk7BjGm6PF0HIf_GBDZrx_gt1Q', '$2y$13$ijrm2IQKA5beMBdEsGZxp.6hz3cIZqYNwQCahU.OMST.xqWE39ib6', null, 'admin2@qq.com', '10', '10', '1439622311', '1439622311');

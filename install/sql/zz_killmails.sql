
DROP TABLE IF EXISTS `zz_killmails`;
CREATE TABLE `zz_killmails` (
  `killID` int(32) NOT NULL,
  `processed` int(6) NOT NULL DEFAULT '0',
  `hash` varchar(64) DEFAULT NULL,
  `source` varchar(64) DEFAULT NULL,
  `insertTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kill_json` mediumtext NOT NULL,
  UNIQUE KEY `killID` (`killID`),
  KEY `processed` (`processed`),
  KEY `hash` (`hash`),
  KEY `source` (`source`),
  KEY `insertTime` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPRESSED KEY_BLOCK_SIZE=4
/*!50100 PARTITION BY HASH (killid)
PARTITIONS 10 */;


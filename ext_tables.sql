#
# Table structure for table 'tx_ecoreplacer'
#
CREATE TABLE tx_ecopatterns (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	update_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	search_pattern tinytext NOT NULL,
	replace_pattern tinytext NOT NULL,
	comment text NOT NULL,

	PRIMARY KEY (uid),
);


#	deleted tinyint(4) DEFAULT '0' NOT NULL,
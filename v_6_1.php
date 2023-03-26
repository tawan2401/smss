<?php
defined( '_VALID_' ) or die( 'Direct Access to this location is not allowed.' );

//home work
$sql_create="CREATE TABLE `homework_date` (
  `id` int(11) NOT NULL auto_increment,
  `person_id` varchar(13) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `rec_date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1" ;
$query = mysqli_query($connect,$sql_create);


$sql_create="CREATE TABLE `homework_permission` (
  `id` int(11) NOT NULL auto_increment,
  `person_id` varchar(13) NOT NULL,
  `p1` tinyint(4) NOT NULL,
  `officer` varchar(13) NOT NULL,
  `rec_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1" ;
$query = mysqli_query($connect,$sql_create);

$sql_create="CREATE TABLE `homework_person_set` (
  `id` int(11) NOT NULL auto_increment,
  `person_id` varchar(13) NOT NULL,
  `comment_person` varchar(13) default NULL,
  `grant_person` varchar(13) default NULL,
  `officer` varchar(13) default NULL,
  `rec_date` date default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `person_id` (`person_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
$query = mysqli_query($connect,$sql_create);

$sql_create="CREATE TABLE IF NOT EXISTS `homework_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(13) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `plan` text NOT NULL,
  `home` varchar(250) DEFAULT NULL,
  `document` varchar(150) DEFAULT NULL,
  `no_comment` tinyint(4) NOT NULL DEFAULT '0',
  `grant_person_selected` varchar(13) DEFAULT NULL,
  `rec_date` datetime NOT NULL,
  `officer_comment` varchar(200) NOT NULL,
  `officer_sign` varchar(13) NOT NULL,
  `officer_date` datetime DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `comment_person` varchar(13) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `grant_x` tinyint(4) DEFAULT NULL,
  `grant_comment` varchar(200) DEFAULT NULL,
  `grant_person` varchar(13) DEFAULT NULL,
  `grant_date` datetime DEFAULT NULL,
  `report` text,
  `report_date` datetime DEFAULT NULL,
  `report_read` varchar(13) NOT NULL,
  `report_read_date` datetime NOT NULL,
  `comment_need` tinyint(4) NOT NULL,
  `school_code` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ref_id` (`ref_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";
$query = mysqli_query($connect,$sql_create);

$sql_create="ALTER TABLE `work_main` ADD `homework` VARCHAR(50) NOT NULL DEFAULT '' AFTER `officer`";
$query = mysqli_query($connect,$sql_create);

//idocument
$sql_create = "CREATE TABLE `idocument_comment` (
  `id` int(11) NOT NULL,
  `document_id` int(10) NOT NULL COMMENT 'รหัสบันทึกข้อความ',
  `rec_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `person_comments_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `person_comments_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_comments_position` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments_select` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments_txt` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `comments_etctxt` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `comments_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comments_type` int(2) DEFAULT NULL,
  `comments_status` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$query = mysqli_query($connect,$sql_create);

$sql_create = "CREATE TABLE `idocument_comment2` (
  `id` int(11) NOT NULL,
  `document_id` int(10) NOT NULL COMMENT 'รหัสบันทึกข้อความ',
  `rec_id` varchar(25) CHARACTER SET utf8 NOT NULL,
  `person_comments_id` int(20) NOT NULL,
  `person_comments_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `person_comments_position` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments_select` int(2) NOT NULL,
  `comments_txt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments_etctxt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comments_type` int(2) NOT NULL,
  `comments_status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$query = mysqli_query($connect,$sql_create);

$sql_create = "CREATE TABLE `idocument_files` (
  `id` int(11) NOT NULL,
  `document_id` int(10) DEFAULT NULL COMMENT 'รหัสบันทึกข้อความ',
  `file_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชื่อไฟล์แนบ',
  `file_des` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'รายละเอียดไฟล์แนบ',
  `filetype` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `docType` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$query = mysqli_query($connect,$sql_create);

$sql_create = "CREATE TABLE IF NOT EXISTS `idocument_main` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `workgroup` int(4) NOT NULL COMMENT 'กลุ่มงาน,ส่วนราชการ',
  `workgroup_txt` text CHARACTER SET utf8 NOT NULL,
  `book_year` int(4) NOT NULL COMMENT 'ปีของบันทึก',
  `book_number` int(5) NOT NULL COMMENT 'เลขที่บันทึก (เฉพาะตัวเลข)',
  `book_no` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'เลขที่บันทึก',
  `book_date` date NOT NULL COMMENT 'ลงวันที่ \"2018-07-13\"',
  `subject` text CHARACTER SET utf8 NOT NULL COMMENT 'เรื่อง',
  `pre_doc_id` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'ร่างหนังสือส่ง',
  `book_to` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'เรียนถึง?',
  `content1` text CHARACTER SET utf8 NOT NULL COMMENT 'ย่อหน้า1',
  `content2` text CHARACTER SET utf8 NOT NULL COMMENT 'ย่อหน้า2',
  `content3` text CHARACTER SET utf8 NOT NULL COMMENT 'ย่อหน้า3',
  `officer` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'ผู้บันทึก',
  `officer_name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'ผู้บันทึก(ชื่อ-สกุล)',
  `officer_position` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'ผู้บันทึก(ตำแหน่ง',
  `book_status` int(1) NOT NULL COMMENT '0 เจ้าของ, 1 หัวหน้า, 2 รอง, 3 ผอ',
  `book_type` int(1) NOT NULL COMMENT 'ประเภทบันทึกเสนอ ปกติ,ด่วน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
$query = mysqli_query($connect,$sql_create);

$sql_create = "CREATE TABLE `idocument_sendto` (
  `id` int(11) NOT NULL,
  `document_id` int(10) NOT NULL COMMENT 'รหัสบันทึกข้อความ',
  `rec_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `rec_from` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `person_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `open_time` datetime DEFAULT NULL,
  `document_from` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$query = mysqli_query($connect,$sql_create);

$sql_create = "CREATE TABLE `idocument_status` (
  `id` int(11) NOT NULL,
  `bookstatusid` int(11) NOT NULL,
  `bookstatusname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position_use` int(11) NOT NULL,
  `badge_color` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `textColor` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$query = mysqli_query($connect,$sql_create);

$sql_create = "INSERT INTO `idocument_status` (`id`, `bookstatusid`, `bookstatusname`, `position_use`, `badge_color`, `textColor`) VALUES
(1, 0, 'เพื่อโปรดทราบ', 0, 'DodgerBlue', 'info'),
(2, 1, 'เพื่อโปรดพิจารณา', 0, 'DodgerBlue', 'info'),
(3, 2, 'ทราบ', 1, 'green', 'success'),
(4, 3, 'ลงนามแล้ว', 1, 'green', 'success'),
(5, 4, 'อนุญาต', 1, 'green', 'success'),
(6, 5, 'อนุมัติ', 1, 'green', 'success'),
(7, 6, 'ชอบ/ให้ดำเนินการตามเสนอ', 1, 'green', 'success'),
(8, 7, 'ไม่อนุญาต', 1, 'red', 'danger'),
(9, 8, 'ไม่อนุมัติ', 1, 'red', 'danger'),
(10, 99, 'คืนเรื่อง', 1, 'orange', 'warning');";
$query = mysqli_query($connect,$sql_create);

$sql_create = "ALTER TABLE `idocument_comment` ADD PRIMARY KEY (`id`);";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_files`  ADD PRIMARY KEY (`id`);";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_main`  ADD PRIMARY KEY (`id`);";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_sendto`  ADD PRIMARY KEY (`id`);";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_status`  ADD PRIMARY KEY (`id`),  ADD KEY `id` (`id`);";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_comment`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_files`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_main`  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_sendto`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
$query = mysqli_query($connect,$sql_create);
$sql_create = "ALTER TABLE `idocument_status`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
$query = mysqli_query($connect,$sql_create);

$sql="INSERT INTO `system_module` (`module`, `module_desc`, `workgroup`, `module_active`, `module_order`, `web_link`, `url`, `where_work`, `menu_pic`) VALUES
('idocument', '﻿บันทึกข้อความ', 4, 1, 0, 0, '', 0, ''),
('homework', '﻿ขออนุญาตปฏิบัติราชการที่บ้าน', 4, 1, 0, 0, '', 0, '')";
$query = mysqli_query($connect,$sql);

$sql="ALTER TABLE `bets_test` ADD `open_test` TINYINT NOT NULL DEFAULT '0' AFTER `test_active` ";
$query = mysqli_query($connect,$sql);

$sql="ALTER TABLE `bets_item` ADD `solve_doc` VARCHAR(150) NOT NULL DEFAULT '' AFTER `doc_item` ";
$query = mysqli_query($connect,$sql);

?>

INSERT INTO `usr_user` (`usr_oid`, `usr_nom`, `usr_prenom`, `usr_phone`) VALUES
(1,	'leo',	'Subias',	698668368);

INSERT INTO `typ_type__annonce` (`typ_oid`, `typ_nom`) VALUES
(1,	'Location');

INSERT INTO `adm_admin` (`adm_oid`, `adm_nom`, `adm_prenom`, `adm_phone`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(5,	NULL,	NULL,	NULL,	'leo34',	'leo34',	'jojo@gmail.com',	'jojo@gmail.com',	1,	NULL,	'admin',	'2018-02-03 15:28:42',	NULL,	NULL,	'a:0:{}');

INSERT INTO `ann_annonce` (`ann_oid`, `typ_oid`, `usr_oid`, `adm_oid`, `ann_prix`, `ann_titre`, `ann_description`, `ann_nb_pieces`, `ann_photo`, `updated_at`) VALUES
(7,	1,	1,	6,	3516,	'qmd;fs;d',	';qsfùsm;dvf',	4,	'5a7b08faa4dd6234597051.jpg',	'2018-02-07 15:11:06');
--
-- Déchargement des données de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_adm`, `email`, `pwd`, `role`) VALUES
(1, 'mahoro@gmail.com', '123', 'admin'),
(2, 'keza@gmail.com', '123', 'co-admin');

-- --------------------------------------------------------
--
-- Déchargement des données de la table `tbl_obj`
--

INSERT INTO `tbl_obj` (`id_obj`, `name`, `phone`, `shipTo`, `purchaseDate`) VALUES
(1, 'kagabo', '79654123', '996-3523 Et Ave', '2021-02-03 22:08:10'),
(2, 'minani', '69874521', 'Ap #516-8821 Vitae Street', '2021-02-03 22:08:10'),
(3, 'kubwi', '69140846', '840-2188 Placerat, Rd.', '2021-02-04 09:50:42'),
(4, 'keke', '54884615', '48 rue babuin', '2021-02-10 15:57:23');
COMMIT;


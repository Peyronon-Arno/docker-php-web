-- Création de la table
DROP TABLE IF EXISTS `Data`;

CREATE TABLE Data (
     id INTEGER NOT NULL AUTO_INCREMENT,
     nom varchar(64) NOT NULL,
     PRIMARY KEY (id)
) CHARSET='utf8' COMMENT='Liste';

-- Contenu de la table

INSERT INTO Data (nom)
VALUES ('Albert C'),a
       ('Issac A'),
       ('Charles D');


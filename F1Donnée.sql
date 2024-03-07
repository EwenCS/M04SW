USE f1_cagnon;
CREATE TABLE pilote
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    datenaissance DATE,
    nationalite VARCHAR(50),
    ecurie VARCHAR(50)
);

CREATE TABLE mesure
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    vitesse INT,
    regime INT,
    instant DATETIME,
    pilote_id INT,
    FOREIGN KEY (pilote_id) REFERENCES pilote(id)
    FOREIGN KEY (circuit_id) REFERENCES circuit(id)
);

CREATE TABLE circuit
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    pays VARCHAR(50),
    longueur INT,
    circuit_id INT
)
 

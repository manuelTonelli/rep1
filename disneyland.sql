CREATE DATABASE Disneyland;
USE Disneyland;
CREATE TABLE Citta (
   sigla CHAR(2) NOT NULL,
   denominazione VARCHAR(16) NOT NULL,
   CONSTRAINT chiave_primaria PRIMARY KEY (sigla)
);
INSERT INTO Citta (sigla, denominazione) VALUES
('PA', 'Paperopoli'),
('TO', 'Topolinia');

CREATE TABLE Personaggi (
   nome VARCHAR(32) NOT NULL,
   citta CHAR(2) NOT NULL,
   CONSTRAINT chiave_primaria PRIMARY KEY (nome),
   CONSTRAINT chiave_esterna FOREIGN KEY (citta) REFERENCES Citta(sigla)
);
INSERT INTO Personaggi (nome, citta) VALUES
('Paperone', 'PA'),
('Paperino', 'PA'),
('Qui', 'PA'),
('Quo', 'PA'),
('Qua', 'PA'),
('Topolino', 'TO'),
('Pippo', 'TO');
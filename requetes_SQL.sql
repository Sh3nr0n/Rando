
-- #1\ Sur la page d’accueil, afficher dans un tableau la liste de toutes les randonnées (nom, difficulté, distance, durée, dénivelé, praticable).

SELECT * FROM hiking; 

--OU

SELECT id, name, difficulty, distance, duration, height_difference, available FROM hiking;

-- #2\ En cliquant sur un bouton, être redirigé sur une nouvelle page qui me permet de créer une randonnées répondant aux informations listées au point précédent.

-- attention nau champ "difficulty" qui prend du enum

INSERT INTO hiking( name, difficulty, distance, duration, height_difference, available) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]);

-- #3\ En cliquant sur le nom d’une randonnée, être redirigé vers une page qui me permet de modifier les informations de cette randonnée. Les champs affichés doivent être pré-remplis et le cas échéant pré-sélectionnés.

--sélection pour pré-remplissage des champs
SELECT * FROM hiking WHERE id =[value]; 

-- requête de mise à jour
UPDATE hiking SET difficulty=[value-3],distance=[value-4],duration=[value-5],height_difference=[value-6],available=[value-7] WHERE name=[value-2];

-- #4\  En cliquant sur un bouton présent sur chaque ligne du tableau de la page d’accueil, supprimer la randonnée associée. La page se met à jour automatiquement.


DELETE FROM hiking WHERE id=[value];
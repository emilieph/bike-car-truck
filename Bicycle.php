<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Tableau</title>
  <script>

var scoreA = 5;
var scoreB = 5;

// Fonction pour répartir les points entre les équipes
function addPoints (point){
if (point == true){
    console.log("equipe A gagne")
}
if(point != true){
     console.log("equipe B gagne")
    }
}

// Fonction pour dire qui mange qui : quand une équipe gagne un point forcément l'équipe adverse en perd un
function addPoints2 (scoreA,scoreB){
if (scoreA < scoreB){
    console.log ("B mange A")
}
if (scoreA > scoreB){
    console.log("A mange B")
}
if (scoreA == scoreB){
    console.log("ex-aqueo")
    }
}

// Fonction pour ajouter/retirer des points à chaque équipe
function addPoints (point, scoreA, scoreB){
if (point == true){
  // Ajouter un point à scoreA, retirer 1 point à scoreB et enfin afficher les scores de tout le monde
scoreA = scoreA + point
    console.log('equipe A a ' + scoreA + ' points.')
scoreB = scoreB - point
    console.log('equipe B a ' + scoreB +' points.')
    }
}

tableau = [1,2,3,4,5,6,7,8,9,10];
for(let i = 0; i < tableau.length; i++){
    console.log (tableau[i])
}

//
tableau = [0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1]
let retour = false
for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++){
//“si la valeur d’avant n’est pas égale à undefined et qu’elle est différente de la valeur en cours”, alors retour = true
if(([laCaseEnCours-1] == undefined) && ([laCaseEnCours-1] != laCaseEnCours)){
    console.log(true)
}
//Puis un autre if : “si la valeur d’après n’est pas égale à undefined et qu’elle est différente de la valeur en cours”, alors retour = true
if(([laCaseEnCours+1] == undefined) && ([laCaseEnCours+1] != laCaseEnCours)){
    console.log(true)
}
//Etc pour la valeur d’au dessus, et la valeur d’en dessous
if(([laCaseEnCours-6] == undefined) && ([laCaseEnCours-6] != laCaseEnCours)){
    console.log(true)
}
if(([laCaseEnCours+6] == undefined) && ([laCaseEnCours+6] != laCaseEnCours)){
    console.log(true)
}
//Ensuite tu fais un console.log(retour). Il sera de true si un if a été rempli, et de false s’il n’est tombé dans aucun if
    console.log (retour)
};


tableau = [0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1]
for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++){debugger;
if (((tableau[laCaseEnCours-1]) == undefined) || ((tableau[laCaseEnCours+1]) == undefined) || ((tableau[laCaseEnCours+6]) == undefined) || ((tableau[laCaseEnCours-6]) == undefined)) {
    console.log (false)
}
else{
    console.log (true)
}
    };

 
tableau = [0,0,0,0,0,1,1,1,1,1]
//pour chaque case affiche "non" si les deux cases d'à côté sont de la même valeur et "oui" s'il y a, au moins une case qui est de valeur différente.
//Tu devrais donc avoir un script qui affiche :  non - non - non - non - oui - oui - non - non - non - non
for(let i = 0; i < tableau.length; i++){
    debugger;
    var suivante = i+1;
    var precedente = i-1;
        if (tableau[i - 1] == tableau[1]){
            console.log("la case "+precedente+" = "+tableau[i-1])
        }
        if (tableau[i + 1] == tableau[5]){
            console.log("la case "+suivante+" = "+tableau[i+1])
            }
};


    function nomFonction (parametre) {
      console.log(parametre+1)
    }

for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++){
   console.log(tableau[laCaseEnCours])
};


//si la suivante est de valeur égale alors affiche false, sinon affiche true
for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++)
if ((tableau[laCaseEnCours+1]) == tableau[laCaseEnCours]) {
    console.log (false)
} else {
    console.log (true) }




//si la précédente || la suivante est différente alors affiche true, sinon false
tableau = [0,0,0,0,0,1,1,1,1,1]
for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++)
if (((tableau[laCaseEnCours-1]) != (tableau[laCaseEnCours])) || ((tableau[laCaseEnCours+1]) != (tableau[laCaseEnCours]))) {
    console.log (true)
} else {
    console.log (false)
};


//Si une seule case : suivante, précédente, en-haut et en-bas de la case en cours est différente alors case en cours change de couleur
tableau = [0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1]
for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++){
if (((tableau[laCaseEnCours-1]) != (tableau[laCaseEnCours])) || ((tableau[laCaseEnCours+1]) != (tableau[laCaseEnCours])) || ((tableau[laCaseEnCours+6]) != (tableau[laCaseEnCours])) || ((tableau[laCaseEnCours-6]) != (tableau[laCaseEnCours]))) {
    console.log (true)
} else {
    console.log (false)
}
    };



// Si une seule case : suivante, précédente, en-haut et en-bas de la case en cours est undefined alors la case en cours est false
tableau = [0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1,0,0,0,1,1,1]
for(let laCaseEnCours = 0; laCaseEnCours < tableau.length; laCaseEnCours++){
if (((tableau[laCaseEnCours-1]) == undefined) || ((tableau[laCaseEnCours+1]) == undefined) || ((tableau[laCaseEnCours+6]) == undefined) || ((tableau[laCaseEnCours-6]) == undefined)) {
    console.log (false)
} 
    };
console.table (tableau) 

  </script>
</head>
<body>
  ...
  <!-- Le reste du contenu -->
  ...
</body>
</html>

alert ("Bienvenue dans notre jeu préféré!");

const difficulté=prompt("Choisissez le niveau de difficulté");

const chiffre_caché = Math.floor(Math.random() * 10);

let nb_essai=0;
let correcte=false;

while(nb_essai<difficulté && correcte==false)
{ 
    nb_essai++;
    monEssai=prompt("Tentez votre chance n°"+nb_essai);
     

    if (monEssai==chiffre_caché)
    {  
        alert("Bien joué! Vous avez devinez le chiffre caché!");
        correcte=true;
    }

    
}
if (correcte==false){
    alert("Mince! vous avez perdu. Essayez de nouveau !")
}


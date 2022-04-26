    "use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    // je place mon fichier JSON dans une variable
    // const pokedex = 'pokedex.json';
    const pokemons = [];
    var form = document.querySelector('form');
    var formDatas = new FormData();
    var search = document.querySelector('input');
    var resultat = document.querySelector('ul');
    var lien = document.querySelector('a');

    fetch('traitement.php', {
        method: 'POST',
        body: formDatas
    })

    .then(function(response) {
        return response.json()
    })
    .then(data => pokemons.push(...data));
    console.log(pokemons)


    // fetch(pokedex)
    // // avec res(ou qu'importe le nom) je recupere des donnée brute que je transforme en "json" par la suite
    //     .then(res => res.json())
    // // avec le "spread(...)" je décompose toute les donnée ce qui me permet de les manipulé une par une
    //     .then(data => pokemons.push(...data.pokemon));
        
    function trouverPokemon(recherche, pokemons) {
    // filtre le tableau pokemons pour chaque array
        return pokemons.filter(data => {
        // va recuperé les info de l'input avec le regex, gi = tout les caractère qu'il soi minuscule et majuscule
            const regex = new RegExp(recherche, 'gi');
        // recherche le pokemon par son nom si sa match avec le regex ou par son type avec find qui renvoi la valeur du premier élément trouvé dans le tableau =>|| pokemon.type.find(type => type.match(regex)); 
            return data.name.match(regex);
        });
    }

    function afficherResultat() {
        const tableauResultat = trouverPokemon(this.value, pokemons);
        const html = tableauResultat.map(data => { // map permet de boucler sur chacune des entré du tableau
            return `
                <a href="element.php">
                    <li>
                        <span>N°${data.id}</span>
                        <img src = "${data.img}" alt= "img poke">
                        <span>${data.name}</span>
                    </li>
                </a>
            `;
        }).join(''); //join les array du tableau entre eux pour qu'il n'y est plus d'espacement
        
        if (search.value == "") {
           resultat.innerHTML = "";
        } else {
            resultat.innerHTML = html;
        }
    }

    function validerRecherche(afficherResultat) {
        fetch(pokedex, {
            method: "POST",
            body: afficherResultat
        })
        window.location.replace('element.php');
    }

    search.addEventListener('keyup', afficherResultat);
    lien.addEventListener('click', validerRecherche)
})
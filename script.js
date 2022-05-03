    "use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    const pokemons = [];
    var form = document.querySelector('form');
    var formDatas = new FormData();
    var search = document.querySelector('input');
    var resultat = document.querySelector('ul');
    var lien = document.querySelector('#a');
    var article = document.querySelector('article');

    formDatas.append('search', search.value);

    fetch('traitement.php', {
        method: 'POST',
        body: JSON.stringify({
            search: search.value
        }),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })
    .then(function(response) {
        return response.json()
    })
    .then(data => pokemons.push(...data))
        console.log(pokemons)
    
    
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
                <a href='element.php?id=${data.id}'>
                    <li>
                        <span>N°${data.num}</span>
                        <img src = "${data.img}" alt= "img poke">
                        <span>${data.name}</span>
                    </li>
                </a>
            `;
        }).join(''); //join les array du tableau entre eux pour qu'il n'y est plus d'espacement
        if (search.value !== "") {
           resultat.innerHTML = html;
        } else {
            resultat.innerHTML = "";
        }
    }

    search.addEventListener('keyup', afficherResultat);
})
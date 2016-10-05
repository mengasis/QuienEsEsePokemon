const pokemonGif = require('pokemon-gif');

module.exports = function(id, callback){
  /* String input: must be a valid pokemon name */
  pokemonGif('pikachu');
  // => 'http://www.pokestadium.com/sprites/xy/pikachu.gif'

  /* Number input: must be a valid pokedex number (1 - 721) */
  pokemonGif(25);
  // => 'http://www.pokestadium.com/sprites/xy/pikachu.gif'
  callback(pokemonGif(1));

}

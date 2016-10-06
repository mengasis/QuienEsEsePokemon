const pokemonGif = require('pokemon-gif');

module.exports = function(id, callback){

  callback(pokemonGif(id));

};

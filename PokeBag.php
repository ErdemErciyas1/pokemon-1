<?php

/* responsibility: holds zero, one or many pokemon objects;
* is able to add pokemon object
 * is able to delete pokemon objects
 * is able to return one specific pokemon based on id
 * is able to return an random pokemon
 * is able to return a formatted list of all pokemons in the bag
 */
class PokeBag {

    var $_pokemons; // array of all pokemons

    function __construct()
    {
        $this->_pokemons = [];
    }

    function Add(Pokemon $pokemon) {
        // find a way to add a new item to the array $this->_pokemons
    }

    function Delete($id) {
        // use array_key_exists to check if array has a certain id,
        // use array_splice to remove an item and reindex the array
    }

    function All() {
        return null;            // return the complete array $this->_pokemons
    }

    function GetAllNames() {
        $Names = [];

        return $Names;          // use foreach
    }

    function Get($id) {
        return null;            // get a single item from the array $this->_pokemons
    }

    function Random() {
        return null;            // use array_rand
    }

}
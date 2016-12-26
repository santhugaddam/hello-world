# Pokedex - Web developer assignment

This document contains description and requirements for assignment for web developer skills.

### Goal


The goal is to verify that the applicant is able to:
- Make a new structured project
- Make responsive view
- Write clean code
- Cover the code with unit tests
- Use git
- Write short and clean documentation

### Requirements

1) Create public github repository that you will send to us.<br/>
2) For implementation you should and can only use **PHP** with **Slim** or **Laravel** frameworks for backend and **JQuery** and **CSS Bootstrap** for front end.<br/>
3) Create a single page that list all pokemons.<br/>
All datas are stored in `/data/`<br/>
All images are stored in `/images/`<br/>
For each pokemon, we should see the ename, id and theme (in `/images/thm/`).<br/>
4) The user should be able to sort pokemons ASC and DESC on fields: name, id, type.<br/>
5) The user should be able to filter pokemons on the previous fields.<br/>
6) The user should be able to search any pokemon by name.<br/>
7) The user should be able to see the detail of a pokemon when click on it.<br/>
The detail should be in the same view and extend the container.<br/>
It should do not load an other page or open in popup or popin.<br/>
The detail contains:
 * ename (in `/data/pokedex.json`)
 * id
 * sprite (in `/images/spr/`)
 * image (in `/images/img/`)
 * types (in `/data/types.json`)
 * Attack
 * Defense
 * HP
 * Sp.Atk
 * Sp.Def
 * Speed
 <br/>

8) Make a clean Readme that explains how to install and run your project.<br/>
9) Send your github repository to us and we will check it.<br/>

### Specification

* The  code needs to work after we pull it and try it (no bugs).
* The view should be responsive and beautiful.<br/>
* Organisation is the key. Make something clean and understandable.

### Bonus

1) Display all level_up skills ename in the pokemon description.(in `/data/pokedex.json` and `/data/skills.json`)<br/>
2) Display the skill description on hover skill ename.<br/>
This description contains ename, id, type, accuracy, pp and power.


# 📚 DOCUMENTATION COMPLÈTE - Développement Web
## Guide complet pour comprendre et coder facilement

---

# 📖 TABLE DES MATIÈRES

1. [Introduction - Comment fonctionne le web](#1-introduction)
2. [Les 3 piliers du développement web](#2-les-3-piliers)
3. [HTML - La structure](#3-html)
4. [CSS - Le style](#4-css)
5. [JavaScript - L'interactivité](#5-javascript)
6. [PHP - Le serveur](#6-php)
7. [Laravel - Le framework](#7-laravel)
8. [Base de données - MySQL](#8-base-de-donnees)
9. [Architecture MVC](#9-architecture-mvc)
10. [Sécurité web](#10-securite)
11. [Git - Versionner son code](#11-git)
12. [Outils et commandes](#12-outils)
13. [Checklist pour coder](#13-checklist)

---

# 1. INTRODUCTION - Comment fonctionne le web

## 🌐 Le principe de base

```
┌─────────────┐                      ┌─────────────┐
│             │   1. Demande (GET)   │             │
│  NAVIGATEUR │ ──────────────────>  │   SERVEUR   │
│  (Client)   │                      │   (PHP)     │
│             │   2. Réponse (HTML)  │             │
│             │ <──────────────────  │             │
└─────────────┘                      └─────────────┘
      │                                      │
      │                                      │
      v                                      v
  JavaScript                           Base de données
  (Interactivité)                          (MySQL)
```

## 🔄 Le cycle complet

**Exemple : Afficher une liste d'utilisateurs**

1. **L'utilisateur** tape `http://monsite.com/users` dans son navigateur
2. **Le navigateur** envoie une requête HTTP GET au serveur
3. **Le serveur** (Laravel) reçoit la requête
4. **La route** dirige vers le bon contrôleur
5. **Le contrôleur** demande les données au modèle
6. **Le modèle** interroge la base de données MySQL
7. **La BDD** renvoie les données
8. **Le contrôleur** passe les données à la vue
9. **La vue** (Blade) génère le HTML
10. **Le serveur** renvoie le HTML au navigateur
11. **Le navigateur** affiche la page
12. **JavaScript** peut ajouter de l'interactivité

**Temps total : ~100-500 millisecondes** ⚡

---

# 2. LES 3 PILIERS DU DÉVELOPPEMENT WEB

## 🏗️ Frontend (Ce que voit l'utilisateur)

### HTML - La structure
```html
<div class="container">
    <h1>Titre</h1>
    <p>Paragraphe</p>
</div>
```
**Rôle :** Définir le contenu et sa structure

---

### CSS - Le style
```css
.container {
    background: blue;
    padding: 20px;
}
```
**Rôle :** Définir l'apparence visuelle

---

### JavaScript - L'interactivité
```javascript
button.addEventListener('click', function() {
    alert('Cliqué !');
});
```
**Rôle :** Rendre la page interactive

---

## 🔧 Backend (Ce qui se passe sur le serveur)

### PHP - Le langage serveur
```php
$users = User::all();
return view('users', ['users' => $users]);
```
**Rôle :** Traiter les données, logique métier

---

### Laravel - Le framework
```php
Route::get('/users', [UserController::class, 'index']);
```
**Rôle :** Organiser et faciliter le code PHP

---

### MySQL - La base de données
```sql
SELECT * FROM users WHERE age > 18;
```
**Rôle :** Stocker et récupérer les données

---

# 3. HTML - LA STRUCTURE

## 🎯 Qu'est-ce que le HTML ?

**HTML = HyperText Markup Language**

C'est le **squelette** de votre page web.

### Analogie
- HTML = Les murs d'une maison
- CSS = La peinture et la déco
- JavaScript = L'électricité et la plomberie

---

## 📝 Structure de base

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue</h1>
    <p>Ceci est un paragraphe</p>

    <script src="script.js"></script>
</body>
</html>
```

---

## 🏷️ Les balises essentielles

### Titres
```html
<h1>Titre principal</h1>
<h2>Sous-titre</h2>
<h3>Sous-sous-titre</h3>
<!-- h1 à h6 -->
```

---

### Texte
```html
<p>Paragraphe de texte</p>
<span>Texte inline</span>
<strong>Texte en gras</strong>
<em>Texte en italique</em>
<br>  <!-- Retour à la ligne -->
<hr>  <!-- Ligne horizontale -->
```

---

### Liens
```html
<a href="https://google.com">Lien externe</a>
<a href="/about">Lien interne</a>
<a href="#section">Ancre</a>
<a href="mailto:email@test.com">Email</a>
```

---

### Images
```html
<img src="photo.jpg" alt="Description">
<img src="https://exemple.com/image.png" alt="Image externe">
```

---

### Listes

**Liste non-ordonnée**
```html
<ul>
    <li>Élément 1</li>
    <li>Élément 2</li>
    <li>Élément 3</li>
</ul>
```

**Liste ordonnée**
```html
<ol>
    <li>Premier</li>
    <li>Deuxième</li>
    <li>Troisième</li>
</ol>
```

---

### Conteneurs

```html
<div>Bloc (prend toute la largeur)</div>
<span>Inline (prend la largeur du contenu)</span>
```

---

### Formulaires

```html
<form method="POST" action="/submit">
    <!-- Texte -->
    <input type="text" name="nom" placeholder="Votre nom">

    <!-- Email -->
    <input type="email" name="email" required>

    <!-- Mot de passe -->
    <input type="password" name="password">

    <!-- Nombre -->
    <input type="number" name="age" min="18" max="100">

    <!-- Date -->
    <input type="date" name="naissance">

    <!-- Checkbox -->
    <input type="checkbox" name="accepte" id="accepte">
    <label for="accepte">J'accepte</label>

    <!-- Radio -->
    <input type="radio" name="genre" value="h" id="homme">
    <label for="homme">Homme</label>
    <input type="radio" name="genre" value="f" id="femme">
    <label for="femme">Femme</label>

    <!-- Select -->
    <select name="pays">
        <option value="fr">France</option>
        <option value="be">Belgique</option>
        <option value="ch">Suisse</option>
    </select>

    <!-- Textarea -->
    <textarea name="message" rows="5"></textarea>

    <!-- Bouton -->
    <button type="submit">Envoyer</button>
</form>
```

---

### Tableau

```html
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Âge</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jean</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Marie</td>
            <td>30</td>
        </tr>
    </tbody>
</table>
```

---

## 🎨 Attributs HTML importants

```html
id="unique"           <!-- Identifiant unique -->
class="ma-classe"     <!-- Classe CSS -->
style="color: red;"   <!-- Style inline -->
href="url"            <!-- Lien (pour <a>) -->
src="url"             <!-- Source (pour <img>) -->
alt="texte"           <!-- Texte alternatif -->
title="info-bulle"    <!-- Info-bulle au survol -->
placeholder="Texte"   <!-- Texte d'exemple dans input -->
required              <!-- Champ obligatoire -->
disabled              <!-- Désactivé -->
readonly              <!-- Lecture seule -->
```

---

# 4. CSS - LE STYLE

## 🎨 Qu'est-ce que le CSS ?

**CSS = Cascading Style Sheets**

C'est la **décoration** de votre page web.

---

## 📝 3 façons d'ajouter du CSS

### 1. CSS externe (RECOMMANDÉ)
```html
<link rel="stylesheet" href="style.css">
```

### 2. CSS interne
```html
<style>
    p { color: red; }
</style>
```

### 3. CSS inline (À ÉVITER)
```html
<p style="color: red;">Texte</p>
```

---

## 🎯 Les sélecteurs

### Par balise
```css
p {
    color: blue;
}
```
**Cible :** Tous les `<p>`

---

### Par classe
```css
.ma-classe {
    color: red;
}
```
**Cible :** `<div class="ma-classe">`

---

### Par ID
```css
#mon-id {
    color: green;
}
```
**Cible :** `<div id="mon-id">`

---

### Combinaisons

```css
/* Tous les p dans un div */
div p {
    color: blue;
}

/* Enfant direct */
div > p {
    color: red;
}

/* Élément suivant */
h1 + p {
    color: green;
}

/* Plusieurs sélecteurs */
h1, h2, h3 {
    color: purple;
}
```

---

## 🎨 Propriétés CSS essentielles

### Couleurs et texte

```css
.exemple {
    /* Couleur du texte */
    color: red;
    color: #ff0000;
    color: rgb(255, 0, 0);
    color: rgba(255, 0, 0, 0.5); /* Avec transparence */

    /* Arrière-plan */
    background-color: blue;
    background-image: url('image.jpg');
    background-size: cover;

    /* Police */
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold; /* normal, bold, 100-900 */
    font-style: italic;

    /* Texte */
    text-align: center; /* left, center, right, justify */
    text-decoration: underline; /* none, underline, line-through */
    text-transform: uppercase; /* lowercase, uppercase, capitalize */
    line-height: 1.5;
    letter-spacing: 2px;
}
```

---

### Box Model (Modèle de boîte)

```
┌─────────────────────────────────────┐
│           MARGIN (extérieur)        │
│  ┌───────────────────────────────┐  │
│  │      BORDER (bordure)         │  │
│  │  ┌─────────────────────────┐  │  │
│  │  │   PADDING (intérieur)   │  │  │
│  │  │  ┌───────────────────┐  │  │  │
│  │  │  │     CONTENT       │  │  │  │
│  │  │  └───────────────────┘  │  │  │
│  │  └─────────────────────────┘  │  │
│  └───────────────────────────────┘  │
└─────────────────────────────────────┘
```

```css
.box {
    /* Largeur et hauteur */
    width: 200px;
    height: 100px;

    /* Padding (espacement intérieur) */
    padding: 20px;              /* Tous les côtés */
    padding: 10px 20px;         /* Haut/Bas  Gauche/Droite */
    padding: 10px 20px 30px 40px; /* Haut Droite Bas Gauche */
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 30px;
    padding-left: 40px;

    /* Margin (espacement extérieur) */
    margin: 20px;
    margin: 0 auto; /* Centrer horizontalement */
    margin-top: 10px;

    /* Bordure */
    border: 1px solid black;
    border: 2px dashed red;
    border-radius: 10px; /* Coins arrondis */
    border-top: 1px solid blue;
}
```

---

### Affichage

```css
.element {
    /* Type d'affichage */
    display: block;        /* Prend toute la largeur */
    display: inline;       /* Suit le texte */
    display: inline-block; /* Mixte */
    display: flex;         /* Flexbox */
    display: grid;         /* Grid */
    display: none;         /* Caché */

    /* Visibilité */
    visibility: hidden;    /* Caché mais prend l'espace */
    opacity: 0.5;          /* Transparence (0 à 1) */
}
```

---

### Position

```css
.element {
    position: static;     /* Normal (par défaut) */
    position: relative;   /* Relatif à sa position normale */
    position: absolute;   /* Relatif au parent positionné */
    position: fixed;      /* Relatif à la fenêtre */
    position: sticky;     /* Mixte relative/fixed */

    top: 10px;
    right: 20px;
    bottom: 30px;
    left: 40px;

    z-index: 10;          /* Ordre d'empilement */
}
```

---

### Flexbox (Disposition moderne)

```css
.container {
    display: flex;

    /* Direction */
    flex-direction: row;         /* Horizontal (défaut) */
    flex-direction: column;      /* Vertical */

    /* Alignement horizontal */
    justify-content: flex-start;  /* Début */
    justify-content: center;      /* Centre */
    justify-content: flex-end;    /* Fin */
    justify-content: space-between; /* Espaces entre */
    justify-content: space-around;  /* Espaces autour */

    /* Alignement vertical */
    align-items: flex-start;
    align-items: center;
    align-items: flex-end;
    align-items: stretch;

    /* Retour à la ligne */
    flex-wrap: wrap;

    /* Espace entre les éléments */
    gap: 20px;
}
```

---

### Responsive (Adaptation mobile)

```css
/* Mobile first */
.element {
    width: 100%;
}

/* Tablette (≥768px) */
@media (min-width: 768px) {
    .element {
        width: 50%;
    }
}

/* Desktop (≥1024px) */
@media (min-width: 1024px) {
    .element {
        width: 33.33%;
    }
}
```

---

### Pseudo-classes (États)

```css
/* Lien */
a:hover {      /* Au survol */
    color: red;
}

a:active {     /* Au clic */
    color: blue;
}

a:visited {    /* Déjà visité */
    color: purple;
}

/* Input */
input:focus {  /* Quand actif */
    border: 2px solid blue;
}

input:disabled {
    background: gray;
}

/* Éléments */
li:first-child {
    font-weight: bold;
}

li:last-child {
    border-bottom: none;
}

li:nth-child(2) {    /* 2ème élément */
    color: red;
}

li:nth-child(odd) {  /* Impairs */
    background: #f0f0f0;
}
```

---

# 5. JAVASCRIPT - L'INTERACTIVITÉ

## ⚡ Qu'est-ce que JavaScript ?

**JavaScript** permet de rendre votre site **interactif** et **dynamique**.

### Exemples d'utilisation
- Afficher/cacher un bandeau cookies
- Valider un formulaire
- Charger des données sans recharger la page (AJAX)
- Créer des animations
- Gérer des événements (clics, survol, etc.)

---

## 📝 Où mettre le JavaScript ?

### 1. Fichier externe (RECOMMANDÉ)
```html
<script src="script.js"></script>
```

### 2. Script interne
```html
<script>
    console.log('Hello');
</script>
```

### 3. Inline (À ÉVITER)
```html
<button onclick="alert('Cliqué')">Cliquer</button>
```

---

## 🎯 Les bases de JavaScript

### Variables

```javascript
// Moderne (depuis ES6)
let nom = 'Jean';        // Variable modifiable
const AGE = 25;          // Constante (non modifiable)

// Ancien (à éviter)
var ville = 'Paris';
```

---

### Types de données

```javascript
// String (texte)
let nom = "Jean";
let prenom = 'Marie';
let message = `Bonjour ${nom}`; // Template literal

// Number (nombre)
let age = 25;
let prix = 19.99;

// Boolean (vrai/faux)
let estMajeur = true;
let estAdmin = false;

// Array (tableau)
let fruits = ['pomme', 'banane', 'orange'];
console.log(fruits[0]); // 'pomme'

// Object (objet)
let personne = {
    nom: 'Jean',
    age: 25,
    ville: 'Paris'
};
console.log(personne.nom); // 'Jean'

// null et undefined
let vide = null;
let nonDefini = undefined;
```

---

### Opérateurs

```javascript
// Arithmétiques
let a = 10 + 5;   // 15
let b = 10 - 5;   // 5
let c = 10 * 5;   // 50
let d = 10 / 5;   // 2
let e = 10 % 3;   // 1 (modulo)
let f = 2 ** 3;   // 8 (puissance)

// Incrémentation
let x = 5;
x++;              // 6
x--;              // 5
x += 2;           // 7
x -= 2;           // 5

// Comparaison
10 == '10'        // true (valeur)
10 === '10'       // false (valeur ET type)
10 != '10'        // false
10 !== '10'       // true
10 > 5            // true
10 >= 10          // true
10 < 20           // true
10 <= 10          // true

// Logiques
true && false     // false (ET)
true || false     // true (OU)
!true             // false (NON)
```

---

### Conditions

```javascript
// if / else
if (age >= 18) {
    console.log('Majeur');
} else if (age >= 16) {
    console.log('Presque majeur');
} else {
    console.log('Mineur');
}

// Opérateur ternaire
let statut = age >= 18 ? 'Majeur' : 'Mineur';

// switch
switch (jour) {
    case 'lundi':
        console.log('Début de semaine');
        break;
    case 'vendredi':
        console.log('Fin de semaine');
        break;
    default:
        console.log('Jour normal');
}
```

---

### Boucles

```javascript
// for classique
for (let i = 0; i < 5; i++) {
    console.log(i); // 0, 1, 2, 3, 4
}

// for...of (pour les tableaux)
let fruits = ['pomme', 'banane', 'orange'];
for (let fruit of fruits) {
    console.log(fruit);
}

// forEach
fruits.forEach(function(fruit, index) {
    console.log(index, fruit);
});

// while
let i = 0;
while (i < 5) {
    console.log(i);
    i++;
}
```

---

### Fonctions

```javascript
// Fonction classique
function direBonjour(nom) {
    return 'Bonjour ' + nom;
}

// Fonction fléchée (moderne)
const direBonjour = (nom) => {
    return 'Bonjour ' + nom;
};

// Fonction fléchée courte
const direBonjour = nom => 'Bonjour ' + nom;

// Utilisation
let message = direBonjour('Jean');
console.log(message); // 'Bonjour Jean'
```

---

## 🌐 Manipuler le DOM

### Sélectionner des éléments

```javascript
// Par ID
const element = document.getElementById('mon-id');

// Par classe (premier)
const element = document.querySelector('.ma-classe');

// Par classe (tous)
const elements = document.querySelectorAll('.ma-classe');

// Par balise
const paragraphes = document.querySelectorAll('p');
```

---

### Modifier le contenu

```javascript
const element = document.getElementById('titre');

// Modifier le texte
element.textContent = 'Nouveau texte';

// Modifier le HTML
element.innerHTML = '<strong>Texte en gras</strong>';

// Modifier un attribut
element.setAttribute('class', 'nouvelle-classe');
element.src = 'nouvelle-image.jpg';
```

---

### Modifier le style

```javascript
const element = document.getElementById('box');

element.style.color = 'red';
element.style.backgroundColor = 'blue';
element.style.display = 'none';
element.style.fontSize = '20px';
```

---

### Ajouter/Supprimer des classes

```javascript
const element = document.getElementById('box');

element.classList.add('active');
element.classList.remove('hidden');
element.classList.toggle('visible'); // Ajoute si absent, retire si présent

if (element.classList.contains('active')) {
    console.log('Élément actif');
}
```

---

### Créer et insérer des éléments

```javascript
// Créer un élément
const div = document.createElement('div');
div.textContent = 'Nouveau contenu';
div.classList.add('ma-classe');

// Insérer dans le DOM
const container = document.getElementById('container');
container.appendChild(div);        // À la fin
container.prepend(div);            // Au début
container.insertBefore(div, ref);  // Avant un élément

// Supprimer un élément
element.remove();
```

---

## 🎪 Événements

### addEventListener()

```javascript
const button = document.getElementById('mon-bouton');

button.addEventListener('click', function() {
    console.log('Bouton cliqué !');
});

// Avec fonction fléchée
button.addEventListener('click', () => {
    console.log('Bouton cliqué !');
});
```

---

### Événements courants

```javascript
// Souris
element.addEventListener('click', () => {});       // Clic
element.addEventListener('dblclick', () => {});    // Double-clic
element.addEventListener('mouseover', () => {});   // Survol
element.addEventListener('mouseout', () => {});    // Sort du survol
element.addEventListener('mousemove', () => {});   // Mouvement souris

// Clavier
element.addEventListener('keydown', () => {});     // Touche pressée
element.addEventListener('keyup', () => {});       // Touche relâchée

// Formulaire
form.addEventListener('submit', (e) => {
    e.preventDefault(); // Empêche le rechargement
    console.log('Formulaire envoyé');
});

input.addEventListener('change', () => {});        // Valeur changée
input.addEventListener('input', () => {});         // Saisie en temps réel
input.addEventListener('focus', () => {});         // Focus obtenu
input.addEventListener('blur', () => {});          // Focus perdu

// Page
document.addEventListener('DOMContentLoaded', () => {
    // Le DOM est chargé
});

window.addEventListener('load', () => {
    // Tout est chargé (images, etc.)
});
```

---

### Objet event

```javascript
button.addEventListener('click', function(event) {
    console.log(event.target);        // Élément cliqué
    console.log(event.type);          // Type d'événement
    event.preventDefault();           // Empêche l'action par défaut
    event.stopPropagation();          // Arrête la propagation
});
```

---

## 💾 localStorage (Stockage local)

```javascript
// Écrire
localStorage.setItem('nom', 'Jean');
localStorage.setItem('age', '25');

// Lire
const nom = localStorage.getItem('nom');
console.log(nom); // 'Jean'

// Supprimer
localStorage.removeItem('nom');

// Tout supprimer
localStorage.clear();

// Vérifier existence
if (localStorage.getItem('nom')) {
    console.log('Nom existe');
}
```

---

## 🌐 AJAX / Fetch (Requêtes HTTP)

### fetch() - Méthode moderne

```javascript
// GET - Récupérer des données
fetch('/api/users')
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Erreur:', error);
    });

// POST - Envoyer des données
fetch('/api/users', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': 'token-here'
    },
    body: JSON.stringify({
        nom: 'Jean',
        email: 'jean@test.com'
    })
})
.then(response => response.json())
.then(data => console.log(data));
```

---

### async/await (Plus moderne)

```javascript
async function getUsers() {
    try {
        const response = await fetch('/api/users');
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}

getUsers();
```

---

## 🔧 Méthodes utiles

### String (Chaînes)

```javascript
let texte = 'Bonjour le monde';

texte.length                    // 16
texte.toUpperCase()            // 'BONJOUR LE MONDE'
texte.toLowerCase()            // 'bonjour le monde'
texte.includes('monde')        // true
texte.startsWith('Bonjour')    // true
texte.endsWith('monde')        // true
texte.replace('monde', 'tous') // 'Bonjour le tous'
texte.split(' ')               // ['Bonjour', 'le', 'monde']
texte.trim()                   // Enlève les espaces
texte.substring(0, 7)          // 'Bonjour'
```

---

### Array (Tableaux)

```javascript
let fruits = ['pomme', 'banane', 'orange'];

fruits.length                   // 3
fruits.push('kiwi')            // Ajoute à la fin
fruits.pop()                   // Retire le dernier
fruits.unshift('fraise')       // Ajoute au début
fruits.shift()                 // Retire le premier
fruits.includes('pomme')       // true
fruits.indexOf('banane')       // 1
fruits.join(', ')              // 'pomme, banane, orange'
fruits.reverse()               // Inverse l'ordre
fruits.sort()                  // Trie

// Méthodes modernes
fruits.map(f => f.toUpperCase()) // Transformer
fruits.filter(f => f.length > 5) // Filtrer
fruits.find(f => f === 'pomme')  // Trouver
fruits.forEach(f => console.log(f)) // Parcourir
```

---

### JSON

```javascript
// Object → JSON (texte)
const obj = { nom: 'Jean', age: 25 };
const json = JSON.stringify(obj);
console.log(json); // '{"nom":"Jean","age":25}'

// JSON → Object
const texte = '{"nom":"Jean","age":25}';
const objet = JSON.parse(texte);
console.log(objet.nom); // 'Jean'
```

---

### Console

```javascript
console.log('Message normal');
console.error('Message d'erreur');
console.warn('Avertissement');
console.table([{nom: 'Jean', age: 25}]);
console.clear(); // Vider la console
```

---

# 6. PHP - LE SERVEUR

## 🐘 Qu'est-ce que PHP ?

**PHP = Hypertext Preprocessor**

C'est un langage qui s'exécute sur le **serveur** (pas dans le navigateur).

### Pourquoi PHP ?
- Générer du HTML dynamique
- Accéder à la base de données
- Traiter les formulaires
- Gérer les sessions utilisateur
- Effectuer des calculs côté serveur

---

## 📝 Syntaxe de base

```php
<?php
// Tout le code PHP ici
?>
```

---

### Variables

```php
<?php
$nom = 'Jean';
$age = 25;
$prix = 19.99;
$estMajeur = true;
$fruits = ['pomme', 'banane', 'orange'];
$personne = [
    'nom' => 'Jean',
    'age' => 25
];
?>
```

---

### Afficher du contenu

```php
<?php
echo 'Bonjour';
echo $nom;
echo 'Bonjour ' . $nom; // Concaténation

print 'Bonjour';

// Dans le HTML
?>
<h1><?php echo $titre; ?></h1>
<p><?= $description ?></p>  <!-- Raccourci -->
```

---

### Conditions

```php
<?php
if ($age >= 18) {
    echo 'Majeur';
} elseif ($age >= 16) {
    echo 'Presque majeur';
} else {
    echo 'Mineur';
}

// Opérateur ternaire
$statut = $age >= 18 ? 'Majeur' : 'Mineur';

// switch
switch ($jour) {
    case 'lundi':
        echo 'Début de semaine';
        break;
    case 'vendredi':
        echo 'Fin de semaine';
        break;
    default:
        echo 'Jour normal';
}
?>
```

---

### Boucles

```php
<?php
// for
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// foreach (tableaux)
$fruits = ['pomme', 'banane', 'orange'];
foreach ($fruits as $fruit) {
    echo $fruit;
}

// foreach avec clé
$personne = ['nom' => 'Jean', 'age' => 25];
foreach ($personne as $cle => $valeur) {
    echo "$cle : $valeur";
}

// while
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
?>
```

---

### Fonctions

```php
<?php
function direBonjour($nom) {
    return 'Bonjour ' . $nom;
}

echo direBonjour('Jean'); // 'Bonjour Jean'

// Avec type
function additionner(int $a, int $b): int {
    return $a + $b;
}

// Valeur par défaut
function saluer($nom = 'Invité') {
    return "Bonjour $nom";
}
?>
```

---

### Classes et objets

```php
<?php
class Personne {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function direBonjour() {
        return "Bonjour, je suis {$this->nom}";
    }
}

$jean = new Personne('Jean', 25);
echo $jean->direBonjour();
?>
```

---

### Superglobales

```php
<?php
// GET (paramètres URL)
$nom = $_GET['nom']; // ?nom=Jean

// POST (formulaires)
$email = $_POST['email'];

// SESSION
$_SESSION['user_id'] = 1;
$userId = $_SESSION['user_id'];

// SERVER
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// FILES (upload)
$fichier = $_FILES['photo'];
?>
```

---

### Tableaux utiles

```php
<?php
$fruits = ['pomme', 'banane', 'orange'];

count($fruits);              // 3
in_array('pomme', $fruits);  // true
array_push($fruits, 'kiwi'); // Ajouter
array_pop($fruits);          // Retirer dernier
sort($fruits);               // Trier
implode(', ', $fruits);      // 'pomme, banane, orange'
explode(',', 'a,b,c');       // ['a', 'b', 'c']
?>
```

---

# 7. LARAVEL - LE FRAMEWORK

## 🎨 Qu'est-ce que Laravel ?

**Laravel** est un framework PHP qui facilite et organise le développement web.

### Avantages
- Code organisé (Architecture MVC)
- Fonctionnalités prêtes à l'emploi
- Sécurité intégrée
- ORM (Eloquent) pour la base de données
- Système de routes simple
- Templates (Blade)

---

## 🏗️ Architecture MVC

```
┌──────────────────────────────────────────────────┐
│                   UTILISATEUR                     │
└──────────────────┬───────────────────────────────┘
                   │
                   ↓
┌──────────────────────────────────────────────────┐
│                    ROUTE                         │
│  Route::get('/users', [UserController::class])  │
└──────────────────┬───────────────────────────────┘
                   │
                   ↓
┌──────────────────────────────────────────────────┐
│                 CONTROLLER                       │
│       (Logique métier)                          │
│  public function index() {                       │
│      $users = User::all();                      │
│      return view('users', ['users' => $users]); │
│  }                                              │
└───────────┬──────────────────┬───────────────────┘
            │                  │
            ↓                  ↓
   ┌────────────────┐  ┌────────────────┐
   │     MODEL      │  │      VIEW      │
   │   (Données)    │  │   (Interface)  │
   │  class User    │  │  users.blade   │
   └────────┬───────┘  └────────────────┘
            │
            ↓
   ┌────────────────┐
   │   BASE DE      │
   │   DONNÉES      │
   └────────────────┘
```

---

## 🛣️ Routes (routes/web.php)

### Route GET

```php
Route::get('/users', function() {
    return 'Liste des utilisateurs';
});
```

---

### Route avec contrôleur

```php
Route::get('/users', [UserController::class, 'index']);
```

---

### Route avec paramètre

```php
Route::get('/users/{id}', [UserController::class, 'show']);
```

---

### Route POST

```php
Route::post('/users', [UserController::class, 'store']);
```

---

### Route nommée

```php
Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

// Utilisation
redirect()->route('users.index');
```

---

### Resource (toutes les routes CRUD)

```php
Route::resource('users', UserController::class);
```

**Crée automatiquement :**
- GET /users → index
- GET /users/create → create
- POST /users → store
- GET /users/{id} → show
- GET /users/{id}/edit → edit
- PUT/PATCH /users/{id} → update
- DELETE /users/{id} → destroy

---

### Groupes de routes

```php
// Avec middleware
Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('ideas', IdeaController::class);
});

// Avec préfixe
Route::prefix('admin')->group(function() {
    Route::get('/users', [AdminController::class, 'users']);
});
```

---

## 🎮 Controllers

### Créer un contrôleur

```bash
php artisan make:controller UserController
```

---

### Structure d'un contrôleur

```php
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Afficher la liste
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('users.create');
    }

    // Enregistrer
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
        ]);

        User::create($validated);

        return redirect()->route('users.index')
            ->with('success', 'Utilisateur créé');
    }

    // Afficher un utilisateur
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Afficher le formulaire d'édition
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Mettre à jour
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.index');
    }

    // Supprimer
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index');
    }
}
```

---

## 📦 Models (Eloquent ORM)

### Créer un modèle

```bash
php artisan make:model User
```

---

### Structure d'un modèle

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Table (optionnel, Laravel devine)
    protected $table = 'users';

    // Clé primaire
    protected $primaryKey = 'id';

    // Champs modifiables
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Champs cachés (JSON)
    protected $hidden = [
        'password',
    ];

    // Conversions automatiques
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    // Relations
    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }
}
```

---

### CRUD avec Eloquent

#### Create (Créer)

```php
// Méthode 1
$user = new User();
$user->name = 'Jean';
$user->email = 'jean@test.com';
$user->save();

// Méthode 2
User::create([
    'name' => 'Jean',
    'email' => 'jean@test.com'
]);
```

---

#### Read (Lire)

```php
// Tous
$users = User::all();

// Par ID
$user = User::find(1);
$user = User::findOrFail(1); // Erreur 404 si introuvable

// Premier
$user = User::first();

// Avec condition
$users = User::where('age', '>', 18)->get();
$user = User::where('email', 'jean@test.com')->first();

// Compter
$count = User::count();

// Pagination
$users = User::paginate(10);
```

---

#### Update (Modifier)

```php
$user = User::find(1);
$user->name = 'Jean Dupont';
$user->save();

// Ou
User::where('id', 1)->update(['name' => 'Jean Dupont']);
```

---

#### Delete (Supprimer)

```php
$user = User::find(1);
$user->delete();

// Ou
User::destroy(1);
User::destroy([1, 2, 3]);
```

---

### Relations

#### One to Many

```php
// User a plusieurs Ideas
class User extends Model
{
    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }
}

// Idea appartient à un User
class Idea extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// Utilisation
$user = User::find(1);
$ideas = $user->ideas; // Toutes les idées

$idea = Idea::find(1);
$author = $idea->user; // L'auteur
```

---

## 🗄️ Migrations

### Créer une migration

```bash
php artisan make:migration create_users_table
```

---

### Structure d'une migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
```

---

### Types de colonnes

```php
$table->id();                      // BIGINT auto-increment
$table->string('name');            // VARCHAR(255)
$table->string('name', 100);       // VARCHAR(100)
$table->text('description');       // TEXT
$table->integer('age');            // INTEGER
$table->bigInteger('number');      // BIGINT
$table->float('prix');             // FLOAT
$table->decimal('prix', 8, 2);     // DECIMAL(8,2)
$table->boolean('is_active');      // BOOLEAN
$table->date('birth_date');        // DATE
$table->datetime('created_at');    // DATETIME
$table->timestamp('created_at');   // TIMESTAMP
$table->json('data');              // JSON
$table->enum('status', ['pending', 'approved']); // ENUM

// Modificateurs
->nullable()         // Peut être NULL
->default('value')   // Valeur par défaut
->unique()           // Valeur unique
->unsigned()         // Nombre positif
->index()            // Créer un index
```

---

### Foreign keys

```php
$table->foreignId('user_id')
      ->constrained()
      ->onDelete('cascade');
```

---

### Commandes migrations

```bash
php artisan migrate              # Exécuter
php artisan migrate:rollback     # Annuler dernière
php artisan migrate:fresh        # Tout supprimer et recréer
php artisan migrate:status       # Voir l'état
```

---

## 🎨 Blade (Templates)

### Syntaxe de base

```blade
{{-- Afficher une variable --}}
<h1>{{ $titre }}</h1>

{{-- HTML non-échappé --}}
{!! $html !!}

{{-- Commentaire --}}
{{-- Ceci ne sera pas visible --}}
```

---

### Structures de contrôle

```blade
{{-- If / else --}}
@if($age >= 18)
    <p>Majeur</p>
@elseif($age >= 16)
    <p>Presque majeur</p>
@else
    <p>Mineur</p>
@endif

{{-- Unless (si pas) --}}
@unless($isAdmin)
    <p>Vous n'êtes pas admin</p>
@endunless

{{-- Foreach --}}
@foreach($users as $user)
    <li>{{ $user->name }}</li>
@endforeach

{{-- For --}}
@for($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor

{{-- While --}}
@while($condition)
    <p>...</p>
@endwhile
```

---

### Héritage de templates

**Layout (layouts/app.blade.php)**

```blade
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <nav>...</nav>

    @yield('content')

    <footer>...</footer>
</body>
</html>
```

**Page enfant**

```blade
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue</h1>
    <p>Contenu</p>
@endsection
```

---

### Composants

**Créer un composant**

```bash
php artisan make:component Alert
```

**Composant (components/alert.blade.php)**

```blade
<div class="alert alert-{{ $type }}">
    {{ $slot }}
</div>
```

**Utilisation**

```blade
<x-alert type="success">
    Enregistrement réussi !
</x-alert>
```

---

## 📝 Validation

```php
$validated = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users',
    'age' => 'required|integer|min:18|max:120',
    'password' => 'required|min:8|confirmed',
]);
```

**Règles courantes :**
- `required` - Obligatoire
- `nullable` - Peut être null
- `string` - Chaîne
- `integer` - Entier
- `email` - Email valide
- `unique:table` - Unique
- `min:x` - Minimum
- `max:x` - Maximum
- `confirmed` - Confirmation (password_confirmation)

---

## 🔐 Authentification

```php
use Illuminate\Support\Facades\Auth;

// Utilisateur connecté
$user = Auth::user();
$id = Auth::id();

// Vérifier si connecté
if (Auth::check()) {
    // Connecté
}

// Déconnexion
Auth::logout();
```

---

# 8. BASE DE DONNÉES - MYSQL

## 🗄️ Qu'est-ce qu'une base de données ?

Une **base de données** stocke vos données de manière organisée.

**Analogie :** C'est comme un fichier Excel géant avec plusieurs feuilles (tables).

---

## 📊 Structure

```
Base de données : bai
├── Table : users
│   ├── id
│   ├── name
│   ├── email
│   └── password
│
├── Table : ideas
│   ├── id
│   ├── user_id
│   ├── title
│   └── description
│
└── Table : comments
    ├── id
    ├── idea_id
    ├── user_id
    └── content
```

---

## 🔑 Concepts clés

### Primary Key (Clé primaire)
Identifiant unique de chaque ligne

```sql
id | name
---|------
1  | Jean
2  | Marie
```

---

### Foreign Key (Clé étrangère)
Référence vers une autre table

```sql
-- Table users
id | name
---|------
1  | Jean

-- Table ideas
id | user_id | title
---|---------|-------
1  | 1       | Mon idée
```

`user_id` est une **foreign key** qui pointe vers `users.id`

---

## 📝 SQL de base

### SELECT (Lire)

```sql
-- Tout
SELECT * FROM users;

-- Colonnes spécifiques
SELECT name, email FROM users;

-- Avec condition
SELECT * FROM users WHERE age > 18;

-- Tri
SELECT * FROM users ORDER BY name ASC;

-- Limite
SELECT * FROM users LIMIT 10;
```

---

### INSERT (Créer)

```sql
INSERT INTO users (name, email, age)
VALUES ('Jean', 'jean@test.com', 25);
```

---

### UPDATE (Modifier)

```sql
UPDATE users
SET name = 'Jean Dupont', age = 26
WHERE id = 1;
```

---

### DELETE (Supprimer)

```sql
DELETE FROM users WHERE id = 1;
```

---

### JOIN (Joindre des tables)

```sql
-- Utilisateurs avec leurs idées
SELECT users.name, ideas.title
FROM users
INNER JOIN ideas ON users.id = ideas.user_id;
```

---

# 9. ARCHITECTURE MVC

## 🏗️ Pourquoi MVC ?

**MVC = Model-View-Controller**

C'est une façon d'organiser le code en **séparant les responsabilités**.

---

## 📦 Les 3 composants

### 1. MODEL (Modèle)
**Rôle :** Gérer les données

```php
class User extends Model
{
    // Représente la table "users"
    protected $fillable = ['name', 'email'];
}

// Utilisation
$users = User::all();
```

---

### 2. VIEW (Vue)
**Rôle :** Affichage (HTML)

```blade
<h1>Liste des utilisateurs</h1>
@foreach($users as $user)
    <p>{{ $user->name }}</p>
@endforeach
```

---

### 3. CONTROLLER (Contrôleur)
**Rôle :** Logique métier (lien entre Model et View)

```php
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
```

---

## 🔄 Flux complet

```
1. Utilisateur → URL : /users
                 ↓
2. Route → Route::get('/users', [UserController::class, 'index'])
                 ↓
3. Controller → public function index()
                 ↓
4. Model → $users = User::all()
                 ↓
5. Database → SELECT * FROM users
                 ↓
6. Model → Retourne les données
                 ↓
7. Controller → return view('users.index', ['users' => $users])
                 ↓
8. View → Génère le HTML
                 ↓
9. Navigateur → Affiche la page
```

---

# 10. SÉCURITÉ WEB

## 🔐 Les 3 menaces principales

### 1. XSS (Cross-Site Scripting)
**C'est quoi ?** Injection de JavaScript malveillant

**Danger :**
```html
<!-- L'utilisateur entre : -->
<input value="<script>alert('Hacké')</script>">
```

**Solution Laravel :**
```blade
{{ $variable }}  <!-- Échappé automatiquement ✅ -->
{!! $html !!}    <!-- Pas échappé ⚠️ DANGER -->
```

---

### 2. SQL Injection
**C'est quoi ?** Injection de code SQL malveillant

**Danger :**
```php
// ❌ DANGER
$email = $_GET['email'];
$query = "SELECT * FROM users WHERE email = '$email'";
// Si email = "' OR '1'='1" → Accès à tout !
```

**Solution Laravel :**
```php
// ✅ BON (automatiquement protégé)
User::where('email', $email)->first();
```

---

### 3. CSRF (Cross-Site Request Forgery)
**C'est quoi ?** Fausse requête depuis un autre site

**Solution Laravel :**
```blade
<form method="POST">
    @csrf  <!-- Token de sécurité -->
</form>
```

---

## 🔒 Bonnes pratiques

### Hash des mots de passe

```php
// ❌ JAMAIS stocker en clair
$password = 'password123';

// ✅ Toujours hasher
$hash = bcrypt('password123');
$hash = Hash::make('password123');

// Vérifier
Hash::check('password123', $hash); // true
```

---

### Validation des données

```php
// ✅ Toujours valider
$validated = $request->validate([
    'email' => 'required|email',
    'age' => 'required|integer|min:18',
]);
```

---

### HTTPS
Toujours utiliser HTTPS en production (pas HTTP)

---

# 11. GIT - VERSIONNER SON CODE

## 🌳 Qu'est-ce que Git ?

**Git** permet de **sauvegarder l'historique** de votre code.

### Analogie
Git = Bouton "Ctrl+Z" infini + Travail en équipe

---

## 📝 Commandes essentielles

### Initialiser

```bash
git init                 # Créer un dépôt Git
git clone url           # Cloner un dépôt existant
```

---

### Travailler

```bash
git status              # Voir les changements
git add .               # Ajouter tous les fichiers
git add fichier.txt     # Ajouter un fichier
git commit -m "Message" # Créer un commit
```

---

### Branches

```bash
git branch              # Voir les branches
git branch dev          # Créer une branche
git checkout dev        # Aller sur une branche
git checkout -b feature # Créer et aller sur une branche
git merge dev           # Fusionner une branche
```

---

### Synchroniser

```bash
git push                # Envoyer vers GitHub
git pull                # Récupérer depuis GitHub
```

---

## 🔄 Workflow typique

```bash
# 1. Voir l'état
git status

# 2. Ajouter les fichiers
git add .

# 3. Créer un commit
git commit -m "Ajout du bandeau cookies"

# 4. Envoyer sur GitHub
git push
```

---

# 12. OUTILS ET COMMANDES

## 🛠️ Laravel Artisan

```bash
# Serveur
php artisan serve

# Migrations
php artisan migrate
php artisan migrate:rollback
php artisan migrate:fresh

# Créer des fichiers
php artisan make:model User
php artisan make:controller UserController
php artisan make:migration create_users_table

# Cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Console
php artisan tinker
```

---

## 📦 Composer (PHP)

```bash
composer install        # Installer dépendances
composer update         # Mettre à jour
composer require pkg    # Ajouter un package
composer dump-autoload  # Régénérer autoload
```

---

## 📦 NPM (JavaScript)

```bash
npm install             # Installer dépendances
npm run dev             # Compiler assets (dev)
npm run build           # Compiler (production)
npm run watch           # Compiler en continu
```

---

# 13. CHECKLIST POUR CODER

## ✅ Avant de commencer

- [ ] Comprendre ce que je dois faire
- [ ] Lire la documentation si nécessaire
- [ ] Vérifier que le serveur fonctionne
- [ ] Vérifier que la BDD est accessible

---

## ✅ Pendant le développement

- [ ] Écrire du code propre et commenté
- [ ] Tester au fur et à mesure
- [ ] Utiliser la console (F12) pour débugger
- [ ] Faire des commits réguliers

---

## ✅ Après avoir codé

- [ ] Tester toutes les fonctionnalités
- [ ] Vérifier la sécurité (XSS, SQL Injection)
- [ ] Valider le HTML/CSS
- [ ] Commiter et pusher sur Git

---

# 🎯 RÉSUMÉ FINAL

## Les fondamentaux

1. **HTML** → Structure de la page
2. **CSS** → Style et design
3. **JavaScript** → Interactivité
4. **PHP** → Logique serveur
5. **Laravel** → Framework organisé
6. **MySQL** → Stockage des données
7. **Git** → Versionnement

---

## Le workflow type

```
1. Créer la route          (routes/web.php)
2. Créer le contrôleur     (app/Http/Controllers)
3. Créer le modèle         (app/Models)
4. Créer la migration      (database/migrations)
5. Créer la vue            (resources/views)
6. Tester                  (navigateur + F12)
7. Commiter                (git)
```

---

## 🚀 Pour aller plus loin

### Documentation officielle
- Laravel : https://laravel.com/docs
- PHP : https://www.php.net/manual/fr/
- JavaScript : https://developer.mozilla.org/fr/

### Tutoriels (FR)
- Grafikart : https://grafikart.fr/
- OpenClassrooms : https://openclassrooms.com/

### Pratiquer
- Votre projet BAI est parfait pour apprendre !
- Modifiez, cassez, réparez → C'est comme ça qu'on apprend

---

**FIN DE LA DOCUMENTATION** 📚

**Bonne chance dans votre apprentissage ! 🎓**

Vous avez maintenant toutes les bases pour comprendre et coder ! 💪

# Base CSS

Les exercices ci-après doivent permettre d'utiliser les sélecteurs de base du CSS et de découvrir quelques propriétés courantes.

## Base HTML

Tous les exercices de cette page utilisent le code HTML ci-après comme base.

::: Code HTML

```html
<section>
	<h1>Mon titre 1</h1>
	<article>
		<h2>Mon Titre 2</h2>
		<p>Premier paragraphe</p>
		<p class="maclasse">Deuxième paragraphe</p>
		<p>Troisième paragraphe</p>
		<p id="monid">Quatrième paragraphe</p>
	</article>
	<article>
		<h2 class="maclasse">Mon Titre 3</h2>
		<p id="superid" class="maclasse">Cinquième paragraphe</p>
		<p>Sixième paragraphe</p>
	</article>
</section>
```

:::

## Exercice 1

Pour cet exercice, il faut : 
- Changer la couleur du texte de tous les paragraphes
- Changer la couleur de fond et ajouter une marges intérieure aux éléments de classe `maclasse`
- Ajouter une bordure en trait continu, une marge intérieure et une marge extérieure à l'élément d'identifiant `monid`

@[Exerice 1]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh base.html css/style.css css/base1.css"})

## Exercice 2
Pour cet exercice, il faut :
- Définir la couleur de texte des sections en vert et de marge d'au moins 100 pixels
- Définir la taille de police des titres 1 à 2.5em et petites majuscules
- Définir la taille de police des paragraphes à 14px
- Définir la taille de police des titres 2 à 2vw et la police de caractère en Helvetica

@[Exerice 2]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh base.html css/style.css css/base2.css"})

::: Questions
?[Dans l'exercice 2, tout le texte apparaît en vert ?]
-[ ] Oui, mais ce n'est pas normal. 
-[x] Oui, c'est normal tout les textes dans la section ont hérités de cette propriété.
-[ ] Non, tout le texte n'est pas vert.

?[Dans l'exercice 2, la marge appliquée au section ne s'est pas transmise à ces 'enfants' ?]
-[ ] Ce n'est pas normal, les balises enfants auraient du hériter aussi.
-[ ] C'est le hasard. 
-[x] Toutes les propriétés ne sont pas transmisent aux balises enfants.
:::

## Exercice 3

Pour cet exercice, il faut : 
- Changer la couleur du texte de tous les paragraphes en bleu
- Changer la couleur du texte des éléments de classe `maclasse` en vert
- Changer la couleur du texte des éléments d'identifiant `superid` en rouge

@[Exerice 3]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh base.html css/style.css css/base3.css"})

::: Question
?[Quel est l'ordre de propriété pour l'application des styles (du plus prioritaire au moins prioritaire)?]
-[ ] Balise - Classe - Identifiant
-[ ] Classe - Identifiant - Balise
-[x] Identifiant - Classe - Balise
-[ ] Identifiant - Balise - Classe
:::

## Exercice 4

Pour cet exercice, il faut :
- Définir le police des sections à helvetica.
- Pour les paragraphes définir une marge tout autour de 20px et faire en sorte que chaque mots s'écrivent avec une majuscule.
- Les titres de niveau 1 doivent être aligné au centre, écrit en rouge et de taille 2em.
- Les titres de niveau 2 doivent avoir une marge intérieure de 10px, être sur un fond rouge et avoir une bordure à gauche de 50px noire continue.


@[Exerice 4]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh base.html css/style.css css/base4.css"})

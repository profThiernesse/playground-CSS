# Les sélecteurs

L'adresse suivante fourni les références en terme de sélecteurs CSS : [W3Schools selector](https://www.w3schools.com/cssref/css_selectors.asp)

## Exercice 1

Ce premier exercice est un petit jeu de découverte des sélecteurs. L'objectif est de trouver le bon sélecteur pour le/les élément(s) que l'on désire cibler.

Le jeu se trouve à cette adresse : [CSS Diner](https://flukeout.github.io/).

## Exercice 2

:::Code HTML utilisé
```html
<h1>Mon titre 1</h1>
<p>Premier paragraphe</p>
<p>Deuxième paragraphe</p>	
<article>
	<h2>Mon Titre 2</h2>
	<p>Troisième paragraphe</p>
	<p>Quatrième paragraphe</p>
	<section>
		<h2>Mon Titre 3</h2>
		<p>Cinquième paragraphe</p>
		<p>Sixième paragraphe</p>		
	</section>
</article>
```
:::

En utilisant les sélecteurs réaliser les mises en forme suivante :
- le corps du document doit être écrit en helvitica.
- les titres 1 doivent être centrés et écrit en rouge.
- tous les titres 2 doivent soulignés.
- les titres 2 dans les sections doivent être vert.
- les titres 2 dans les articles doivent être bleu.
- les paragraphes suivants directement un titre 2 doivent être en rouge italique.
- les paragraphes suivants un titre 1 doivent être violet.

@[Exerice 2]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh selecteur.html css/style.css css/selecteur.css"})

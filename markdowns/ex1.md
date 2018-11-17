# Base CSS

Les exercices ci-après doivent permettre d'utiliser les sélecteurs de base du CSS et de découvrir quelques propriétés courantes.

## Base HTML

Tous les exercices de cette page utilises le code HTML ci-après comme base.

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


## Exercice 1

Pour cet exercice, il faut : 
- Changer la couleur du texte de tous les paragraphes
- Changer la couleur de fond et ajouter une marges intérieure aux éléments de class `maclasse`
- Ajouter une bordure en trait continu, une marge intérieure et une marge extérieure à l'élément d'id `monid`

@[Exerice 1]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh base.html css/style.css css/base1.css"})

## Exercice 2
Pour cet exercice, il faut :
- Définir la couleur de texte des sections en vert
- Définir la taille de police des paragraphes à 14px
- Définir la taille de police des titres 2 à 2vw

@[Exerice 2]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh base.html css/style.css css/base2.css"})

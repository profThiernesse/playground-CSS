# Rappel CSS
Le CSS est un langage venant en complément du HTML.
- CSS signifie *Cascading Style Sheet*.
- Il permet de mettre en forme la page web.
- On peut écrire le code CSS à plusieurs endroits différents, le plus conseillé étant de créer un fichier séparé portant l'extension `.css`
- Le CSS utilise des sélecteurs pour appliquer la mise en forme aux éléments HTML ciblés.
- Il existe de nombreux sélecteur CSS : 
	- Les sélecteurs de balise.
	- Les sélecteurs de classe `.`.
	- Les sélecteurs d'identifiant `#`.
	- Des combinaisons des trois précédents.
- Attention à la compatibilité inter-navigateurs. Une commande inconnue est ignorée.

Une définition CSS se présente comme suit : 
```css
sélecteur {
	propriété1:valeur1;
	propriété2:valeur2;
	propriété3:valeur3;
}
```

## Contexte d'utilisation
Dans ces exercices de prise en main du CSS vous aurez toujours une page HTML préconstruite à votre disposion sur laquelle vous devrez appliquer des styles CSS.

## Exemple
Le code `HTML` suivant existe.
```html
<article>
	<h1>Mon article</h1>
	<section>
		<h2>Première section</h2>
		<p>Premier paragraphe</p>
	</section>
	<section>
		<h2>Deuxième section</h2>
		<p>Deuxième paragraphe</p>
		<p>Troisième paragraphe</p>
	</section>
</article>
```
Il faut faire en sorte de : 
- Changer la couleur du texte de tous les paragraphes
- Changer la couleur de fond de tous les titres de niveau 2

@[Introduction]({"stubs": ["css/style.css"], "command": "/bin/bash run.sh intro.html css/style.css css/intro.css"})

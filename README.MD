# CV HTML version
CV HTML / Javascript, créé par Adam Rousselle.
Partage libre.
## Modifications automatiques
### Skills
Les skils sont listés dans la div ```#skills-list``` sous forme de SVGs.
- Pour ajouter un nouveau skills, ajouter le SVG à ```#skills-list```, en ajoutant un identifiant commençant pas ```skill-...```.
    - La taille de la viewbox n'a pas besoin d'être modifiée.
    - Les couleurs ne sont pas automatiquement noire, il faudra les modifier dans les tags *fill*.
    Par exemple pour rajouter le skill *HTML*, copier le logo en SVG et le coller à la suite
    ```html
        <div id="skills-list" style="display: none;">
            <svg id="skill-html" viewBox="0 0 256 256" version="1.1">
                <path d="M9.4 86.6C-3.1 74.1..."/>
            </svg>
        </div>
    ```
- Pour modifier la liste des skills, Trouver la fonction appelée ```chooseSkills()``` dans le script en fin de page.
    - chaques valeurs du tableau passé à ```chooseSkills()``` correspond à un identifiant de SVG stocké dans la div invisible ```skills-list```
    - On peut mettre l'ID du SVG à afficher, avec ou sans son préfixe *skill-*
    > [!NOTE]  
    > L'affichage est prévu pour 6 skills max.
    > La limite n'est pas verouillée mais il faudra travailler l'affichage en modifiant le CSS pour en ajouter d'avantage.
### Age
L'age est calculé et intégré par la fonction ```setAge()```.
Pour modifier l'age, il faudra modifier la ligne ```const birthDate = new Date(1990, 4, 3);```
> [!IMPORTANT]
> Attention, le mois commence à 0 : janvier = 0, décembre = 11.
### Couleur
La couleur principale est modifiable dans le CSS via la variable ```--primary-bg```
```css
body{
    --primary-bg: #eee;
}
```
### Padding des section gauche et droite
Ajustables dans le CSS via les variables ```--pr-padding-x``` et ```--pl-padding-x```
```css
body{
    --pr-padding-x: 0 4%;
    --pl-padding-x: 0 4%;
}
```
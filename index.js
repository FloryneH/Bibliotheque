// Récupérez tous les éléments .resume
var resumeElements = document.querySelectorAll('.resume');

// Nombre de mots à afficher
var maxWords = 100;

// Parcourez chaque élément .resume
resumeElements.forEach(function(resumeElement) {
    // Sépare le texte en mots individuels
    var words = resumeElement.textContent.trim().split(' ');

    // Coupe le texte après un certain nombre de mots
    var shortenedText = words.slice(0, maxWords).join(' ');

    // Met à jour le contenu de l'élément .resume avec le texte raccourci
    resumeElement.textContent = shortenedText + '...';
});
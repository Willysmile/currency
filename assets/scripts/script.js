const inputCurrency = document.getElementById('input-currency')
const outputCurrency = document.getElementById('output-currency')
let inputText = document.getElementById('inputText')
let outputText = document.getElementById('outputText')


// Au changement de select, récupération des valeurs pour affichage

inputCurrency.addEventListener("change", (e) => {
    inputText.textContent = e.target.value.toUpperCase();
})
outputCurrency.addEventListener("change", (e) => {
    outputText.textContent = e.target.value.toUpperCase() ;});
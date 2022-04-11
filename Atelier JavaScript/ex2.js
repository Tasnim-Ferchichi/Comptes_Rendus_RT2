let texte = document.getElementById('text');

let size=document.querySelector('#taille');

let fonts = document.querySelector("#font");

let colorInput = document.getElementById('color');

size.addEventListener('change', (e) => {
  texte.style.fontSize = e.target.value + 'px';
});


colorInput.addEventListener('input', (e) =>{
  texte.style.color = e.target.value;
});

fonts.addEventListener("change",(e)=>{
  texte.style.fontFamily=e.target.value;
});

































































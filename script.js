var rajouter = document.getElementById('add');
var contenu1 = document.getElementById('contenu1');
var contenu2 = document.getElementById('contenu2');
var bouton = true;


rajouter.addEventListener("click",changeContenu);

function changeContenu() {
  if(bouton==true){
    contenu1.style.display = "none";

    contenu2.style.display = "flex";

    rajouter.style.transform = "rotate(45deg)";

    bouton=false;
  } else {
    contenu1.style.display = "flex";

    contenu2.style.display = "none";

    rajouter.style.transform = "rotate(0deg)";

    bouton = true;
  }

}

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
  if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    console.log(xhr.responseText);
  }
};
xhr.open('post', "request.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send('');

function requeteHTTP(){
    var http_objet = new XMLHttpRequest();

    var reponseServeur='';
    http_objet.open("GET", "http://172.20.21.212/~eh/M04SW/test.php/mesure", false);
    http_objet.onreadystatechange = function() {
        if(this.readyState == 4)
        {
            reponseServeur = JSON.parse(this.responseText);

            var tableau="<table><tr><th>Instant</th><th>Vitesse</th><th>Regime</th></tr>";
            for(let i=0; i<reponseServeur.length;i++){
                tableau=tableau+"<tr><td>"+reponseServeur[i]['instant']+"</td><td>"+reponseServeur[i]['vitesse']+"</td><td>"+reponseServeur[i]['regime']+"</td></tr>"
            }
            tableau=tableau+"</table>";
            document.getElementById('section').innerHTML=tableau;
            console.log(reponseServeur);
        }
    }
    http_objet.send();
}
requeteHTTP();
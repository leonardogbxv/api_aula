function consultarImagem() {
  var request = new XMLHttpRequest();
  var dataImagem = document.getElementById("data-imagem").value;
  console.log(dataImagem);
  var url = "https://api.nasa.gov/planetary/apod?api_key=5nX4Zr4SYIpctmg7B1Ef4S7hf0ro17QNxdxnyCwj";

  if(dataImagem != "") url += "&date="+dataImagem;

  request.open("GET", url, true);

  request.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      console.log(response);

      let html = '<p>' + response.url + '</p>';
      html += "<img src='" + response.url + "' alt='" + response.title + "' />";

      document.getElementById("resultado").innerHTML = html;
    }
  };

  request.send();
}
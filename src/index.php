<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script>
    $(function() {
      $("#BtnEnviar").on("click", function() {
        // Enviando a requisição
        $.post(
          "controller.php", // Caminho até o arquivo PHP
          { // Corpo da requisição
            nome:$("#nmPessoa").val(),
            idade: $("#nrIdade").val(),
            genero: $("#flGenero").val()
          },
          function(response) { // Função de retorno
            console.log(response)
          }
        )
      })

      $("#BtnCalcularMedia").on("click", function(){
        $.post(
          "controllerAction.php",
          {
            action: "calcularMedia",
            nota1: $("#nrNota1").val(),
            nota2: $("#nrNota2").val(),
            nota3: $("#nrNota3").val(),
            nota4: $("#nrNota4").val(),
          },
          function(response){
            console.log(response)
          },
          'json'
        )
      })

      $("#BtnCalcularIMC").on("click", function(){
        $.post(
          "controllerAction.php",
          {
            action: "calcularIMC",
            altura: $("#nrAltura").val(),
            peso: $("#nrPeso").val(),
          },
          function(response){
            console.log(response)
          }
        )
      })

      $("#BtnCalcularData").on("click", function(){
        $.post(
          "controllerAction.php",
          {
            action: "calcularDataRestante",
            dataAlvo: $("#dtAlvo").val().
          }
          function(response){
            console.log(response)
          }
        )

      })
    })
  </script>
</head>
<body>
  <form id="frmCadastroPessoa">
    <div>
      <table>
        <tr>
          <td style="text-align:right; width 120px">
            Nome:
          </td>
          <td>
            <input type="text" id="nmPessoa" name="nmPessoa" style="width: 600px;">
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td style="text-align:right; width 120px" class="k-required">
            Idade:
          </td>
          <td>
            <input id="nrIdade" name="nrIdade" style="width: 150px;">
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td style="text-align:right; width 120px" class="k-required">
            Genero:
          </td>
          <td>
            <select name="flGebero" id="flGenero">
              <option value="Masculino">Masculino</option>
              <option value="Feminino"> Feminino</option>
              <option value="Outro">Outro</option>
            </select>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <button type="button" id="BtnEnviar">Enviar</button>
          </td>
        </tr>
      </table>
    </div>
  </form>
  <form id="frmCadastroNotas" action="controllerAction" method="post">
    <div>
      <table>
        <tr>
          <td style="text-align: right; width: 120px">
            Nota 1:
          </td>
          <td>
            <input type="number" id="nrNota1" style="width: 95px;">
          </td>
          <td style="text-align: right; width: 120px">
            Nota 2:
          </td>
          <td>
            <input type="number" id="nrNota2" style="width: 80px;">
          </td>
          <td style="text-align: right; width: 120px;">
            Nota 3:
          </td>
          <td>
            <input type="number" id="nrNota3" style="width: 80px;">
          </td>
          <td style="text-align: right; width: 120px;">
            Nota 4:
          </td>
          <td>
            <input type="number" id="nrNota4" style="width: 80px;">
          </td>
          <td>
            <button type="button" id="BtnCalcularMedia">Calcular Media</button>
          </td>
        </tr>
      </table>
    </div>
  </form>
  <form id="frmCadastroIMC" action="controllerAction" method="post">
    <div>
      <table>
        <tr>
          <td style="text-align: right; width: 120px;">
            Altura:
          </td>
          <td>
            <input type="number" id="nrAltura" style="width: 95px;">
          </td>
          <td style="text-align: right; width: 120px;">
            Peso:
          </td>
          <td>
            <input type="number" id="nrPeso" style="width: 80px;">
          </td>
          <td>
            <button type="button" id="BtnCalcularIMC">Calcular IMC</button>
          </td>
        </tr>
      </table>
    </div>
  </form>
  <form action="controllerAction" method="post">
    <div>
      <table>
        <tr>
          <td style="text-align:right; width: 120px;">
              Data Alvo:
          </td>
          <td>
            <input id="dtAlvo" type="date" style="width: 95px;">
          </td>
          <td>
            <button type="button" id="BtnCalcularData">Calcular</button>
          </td>
        </tr>
      </table>
    </div>
  </form>
</body>
</html>
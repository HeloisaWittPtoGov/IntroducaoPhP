<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
              <option value="Masc">Masculino</option>
              <option value="Fem"> Feminino</option>
              <option value="Ot">Outro</option>
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
    <div>
      <form action="calcularMedia">
        <table>
          <tr>
            <td style="text-align: right; width: 120px">
              Nota 1:
            </td>
            <td>
              <input type="number" id="nrNota1" style="width: 80px;">
            </td>
            <td style="text-align: right; width: 120px">
              Nota 2:
            </td>
            <td>
              <input type="nember" id="nrNota2" style="width: 80px;">
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
              <button type="button" id="BtnCalcularMedia">Calcular</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </form>
</body>
</html>
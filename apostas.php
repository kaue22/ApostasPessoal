<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1>OSCAR 2021 </h1>

        <h2> Indicados </h2>

        <p class="categoria"> Melhor Filme </p>



        <!-- FILME -->
        <div class="testando">
            <div class="cardInitial">
                <div class="card" style="width: 18rem;">
                    <img src="assets/image/Ford_v_Ferrari_poster.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">O projetista Carroll Shelby e o piloto Ken Miles enfrentaram a interferência empresarial, as leis da física e os próprios demônios para construir um carro de corrida para a Ford Motor derrotar a hegemonia de Enzo Ferrari nas 24 horas de Le Mans.</p>
                    </div>
                    <div class="form-check" id="indic">
                        <input type="checkbox" id="melhorfilme" value="ferrari">
                    </div>
                </div>
            </div>


            <div class="cardInitial">
                <div class="card" style="width: 18rem;">
                    <img src="assets/image/jojoposter.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Jojo é um garoto alemão solitário que descobre que sua mãe está escondendo uma garota judia no sótão. Ajudado apenas por seu amigo imaginário, Adolf Hitler, Jojo deve enfrentar seu nacionalismo cego enquanto a Segunda Guerra </p>
                    </div>
                    <div class="form-check" id="indic">
                        <input type="checkbox" id="melhorfilme" value="jojo">
                    </div>
                </div>
            </div>

            <div class="cardInitial">
                <div class="card" style="width: 18rem;">
                    <img src="assets/image/coringa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">O Joker é um supervilão fictício que aparece nos livros de banda desenhada norte-americanos publicados pela editora estadunidense DC Comics. Foi criado por Jerry Robinson, Bill Finger e Bob Kane e apareceu pela primeira vez em Batman #1.</p>
                    </div>
                    <div class="form-check" id="indic">
                        <input type="checkbox" id="melhorfilme" value="coringa">
                    </div>
                </div>
            </div>


            <div class="cardInitial">
                <div class="card" style="width: 18rem;">
                    <img src="assets/image/historia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">A. O. Scott, do jornal americano New York Times, elogiou o filme e o comparou com música: "É engraçado e triste, às vezes em uma única cena, e tece uma trama a partir do colapso confuso de uma realidade compartilhada de tudo de bom</p>
                    </div>
                    <div class="form-check" id="indic">
                        <input type="checkbox" id="melhorfilme" value="casamento">
                    </div>
                </div>
            </div>


            <div class="cardInitial">
                <div class="card" style="width: 18rem;">
                    <img src="assets/image/parasita.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Toda a família de Ki-taek está desempregada, vivendo em um porão sujo e apertado, mas uma obra do acaso faz com que ele omece a dar aulas de inglês a uma garota de família rica. Fascinados com a vida luxuosa destas pessoas, pai, mãe e filhos </p>
                    </div>
                    <div class="form-check" id="indic">
                        <input type="checkbox" id="melhorfilme" value="parasita">
                    </div>
                </div>
            </div>
        </div>
        <button type="button" name="submit" class="btn btn-info" id="submit">Submit</button>

        <!--     <input type="submit" form="form" class="btn btn-dark" value="Enviar Comentário" /><br><br>-->
        </form>

        <!--       <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                    <span class="sr-only">70% Complete</span>
                </div>
            </div>-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/script.js"></script>
</body>

</html>


<script>
    $(document).ready(function() {
        $('#submit').click(function() {
            var melhorfilme = [];
            $('.melhorfilme').each(function() {

                melhorfilme.push($(this).val());

            });

            melhorfilme = melhorfilme.toString();

            console.log(melhorfilme)
            $.ajax({
                url: "inserir.php",
                method: "POST",
                data: {
                    melhorfilme: melhorfilme
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        });
    });
</script>
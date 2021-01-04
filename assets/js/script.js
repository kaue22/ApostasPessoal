
$('#form').submit(function (e) {
    e.preventDefault();

    var fvalue = $('#fvalue').val();
    var svalue = $('#svalue').val();


    /*var data = $("#form").serialize();*/


    $.ajax({
        url: 'http://localhost/Estudo/exercicios/exercicio1/inserir.php',
        method: 'POST',
        data: { valor1: fvalue, valor2: svalue },
        dataType: 'json'
    }).done(function (result) {
        $('#name').val('');
        $('#comment').val('');
        console.log(result);

    });
});

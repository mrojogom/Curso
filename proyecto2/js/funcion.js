function funcion1(){
    var lunes;
    var martes;
    var miercoles;
    var jueves;
    var viernes;
    var compra1;
    var compra2;
    var compra3;
    var compra4;
    var compra5;
    var resultado;

    lunes=prompt("¿Cuál es su compra de productos del Lunes?: ");
    compra1=prompt("¿Cuál es su gasto del Lunes?: ");
    martes=prompt("¿Cuál es su compra de productos del Martes?: ");
    compra2=prompt("¿Cuál es su gasto del Martes?: ");
    miercoles=prompt("¿Cuál es su compra de productos del Miércoles?: ");
    compra3=prompt("¿Cuál es su gasto del Miércoles?: ");
    jueves=prompt("¿Cuál es su compra de productos del Jueves?: ");
    compra4=prompt("¿Cuál es su gasto del Jueves?: ");
    viernes=prompt("¿Cuál es su compra de productos del Viernes?: ");
    compra5=prompt("¿Cuál es su gasto del Viernes?: ");



    document.getElementById("demo1").innerHTML = lunes;
    document.getElementById("demo2").innerHTML = martes;
    document.getElementById("demo3").innerHTML = miercoles;
    document.getElementById("demo4").innerHTML = jueves;
    document.getElementById("demo5").innerHTML = viernes;


    document.getElementById("gasto1").innerHTML = compra1;
    document.getElementById("gasto2").innerHTML = compra2;
    document.getElementById("gasto3").innerHTML = compra3;
    document.getElementById("gasto4").innerHTML = compra4;
    document.getElementById("gasto5").innerHTML = compra5;

    resultado=(Number(compra1)+Number(compra2)+Number(compra3)+Number(compra4)+Number(compra5))
    document.getElementById("gastoTotal").innerHTML = resultado;
}
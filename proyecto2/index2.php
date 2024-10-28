<?php include 'log/header.php'?>

<script src="js/funcion.js"></script>



<div
    class="container" style="margin-top:50px "
>

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg></th>
                <th scope="col">Lunes</th>
                <th scope="col">Martes</th>
                <th scope="col">Miercoles</th>
                <th scope="col">Jueves</th>
                <th scope="col">Viernes</th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><b>PRODUCTOS:</b></td>
                <td id="demo1"></td>
                <td id="demo2"></td>
                <td id="demo3"></td>
                <td id="demo4"></td>
                <td id="demo5"></td>
            </tr>
            <tr class="">
                <td scope="row"><b>GASTOS:</b></td>
                <td id="gasto1"></td>
                <td id="gasto2"></td>
                <td id="gasto3"></td>
                <td id="gasto4"></td>
                <td id="gasto5"></td>
            
            </tr>
        </tbody>
    </table>
</div>

<button type="button" class="btn btn-danger" onclick="funcion1()">MIS COMPRAS</button>

<div style="padding:20px; background-color: grey; border: 2px solid black; height:200px; width:370px; float: right">


<p style="text-align: center">Gastos semanales</p>
<br>
<p>Gastos totales: </p>
<p id="gastoTotal"></p>

</div>
</div>


<?php include 'log/footer.php'?>
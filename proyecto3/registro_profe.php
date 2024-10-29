
<?php include 'log/header.php'?>

<div
    class="container mt-3"
    style="border:2px solid black; background-color: gray; wight: 50px; "
>
<svg xmlns="http://www.w3.org/2000/svg" width="50"  fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
    <h2 style="text-align:center;">REGISTRO DE PROFESOR</h2>

    <div class="mb-3">
        <label for="" class="form-label">Nombre: </label>
        <input
            type="text"
            class="form-control"
            name=""
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="width: 300px"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label" style=" float: right; margin-top:-85px">Apellido: </label>
        <input
            type="text"
            class="form-control"
            name=""
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="width:300px; float: right; margin-top:-55px"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label" >Email:</label>
        <input
            type="text"
            class="form-control"
            name=""
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="width:300px;"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label" style=" float: right; margin: top -65px;">DNI:</label>
        <input
            type="text"
            class="form-control"
            name=""
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="width:300px; float: right; margin-top:-55px"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>
</div>

<?php include 'log/footer.php'?>

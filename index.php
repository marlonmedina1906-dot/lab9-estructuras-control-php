<?php
const SEMILLA = 751;
const NOMBRE = "Marlon";
const APELLIDO = "Medina";

$nombreCompleto = NOMBRE . " " . APELLIDO;
$edad = 8 + (SEMILLA % 70);
$dia = (SEMILLA % 7) + 1;
$mes = (SEMILLA % 12) + 1;
$nota1 = 40 + (SEMILLA % 61);
$nota2 = 40 + ((SEMILLA * 3) % 61);
$nota3 = 40 + ((SEMILLA * 7) % 61);
$monto = 20 + (SEMILLA % 181);
$esMiembro = (SEMILLA % 2) == 0;
$hora = SEMILLA % 24;
$huella = (SEMILLA * 13 + 91) % 1000;
$descuento = SEMILLA * 0.001;
$vacio = null;

// ===== Ejercicio 1: boleto de cine (if / elseif / else) =====
const PRECIO_NINO = 3.00;
const PRECIO_JOVEN = 4.50;
const PRECIO_ADULTO = 7.00;
const PRECIO_JUBILADO = 3.50;

if ($edad < 12) {
  $categoria = "Niño";
  $precio = PRECIO_NINO;
} elseif ($edad <= 17) {
  $categoria = "Joven";
  $precio = PRECIO_JOVEN;
} elseif ($edad <= 59) {
  $categoria = "Adulto";
  $precio = PRECIO_ADULTO;
} else {
  $categoria = "Jubilado";
  $precio = PRECIO_JUBILADO;
}

if ($dia == 3) {
  $precio = $precio * 0.5;
  $miercoles = "Sí";
} else {
  $miercoles = "No";
}

// ===== Ejercicio 2: notas (elseif, ternario, &&) =====
$promedio = ($nota1 + $nota2 + $nota3) / 3;

if ($promedio >= 90) {
  $letra = "A";
} elseif ($promedio >= 80) {
  $letra = "B";
} elseif ($promedio >= 70) {
  $letra = "C";
} elseif ($promedio >= 60) {
  $letra = "D";
} else {
  $letra = "F";
}

$estado = $promedio >= 70 ? "Aprobado" : "Reprobado";
$honor = ($promedio >= 90 && $nota1 >= 80 && $nota2 >= 80 && $nota3 >= 80) ? "Sí" : "No";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="lab9-huella" content="<?php echo $huella; ?>">
  <title>Lab 9 · Estructuras de control</title>
  
  
</head>
<body>
  <header>
    <h1>Laboratorio #9 · Estructuras de control</h1>
    <p id="autor">Autor: <?php echo $nombreCompleto; ?></p>
  </header>

  <main id="lab9-medina">

    <section id="ej0">
      <h2>Ejercicio 0 · Tipos de datos</h2>
      <table id="ej0-tipos">
        <thead>
          <tr><th>Variable</th><th>Tipo</th></tr>
        </thead>
        <tbody>
          <tr><td>$nombreCompleto</td><td><?php echo gettype($nombreCompleto); ?></td></tr>
          <tr><td>$edad</td><td><?php echo gettype($edad); ?></td></tr>
          <tr><td>$esMiembro</td><td><?php echo gettype($esMiembro); ?></td></tr>
          <tr><td>$descuento</td><td><?php echo gettype($descuento); ?></td></tr>
          <tr><td>$vacio</td><td><?php echo gettype($vacio); ?></td></tr>
        </tbody>
      </table>
    </section>

    <section id="ej1">
      <h2>Ejercicio 1 · Boleto de cine</h2>
      <p id="ej1-res"><?php echo "Categoría: " . $categoria . " | Precio final: B/. " . number_format($precio, 2) . " | Miércoles 50%: " . $miercoles; ?></p>
    </section>

    <section id="ej2">
      <h2>Ejercicio 2 · Notas</h2>
      <p id="ej2-res" class="resultado "><?php echo "Promedio: " . number_format($promedio, 2) . " | Letra: " . $letra . " | Estado: " . $estado . " | Cuadro de honor: " . $honor; ?></p>
    </section>

    <section id="ej3">
      <h2>Ejercicio 3 · Día de la semana</h2>
      <p id="ej3-res"></p>
    </section>

    <section id="ej4">
      <h2>Ejercicio 4 · Mes y estación</h2>
      <p id="ej4-res"></p>
    </section>

    <section id="ej5">
      <h2>Ejercicio 5 · Caja de la tienda</h2>
      <p id="ej5-monto"></p>
      <p id="ej5-descuento"></p>
      <p id="ej5-recargo"></p>
      <p id="ej5-total"></p>
    </section>

  </main>

  <footer id="firma">Lab 9 · <?php echo NOMBRE . " " . APELLIDO; ?> · Semilla <?php echo SEMILLA; ?></footer>
</body>
</html>

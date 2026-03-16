<?php
// Validamos si se envió el formulario (usando 'nombre' que es el primer campo requerido)
if (isset($_GET['nombre'])) {
    
    // 1. Recolección de datos con saneamiento básico
    $usuario    = $_GET['nombre'] ?? 'Recluta Anónimo';
    $amor       = $_GET['amor']   ?? 'No especificado';
    $reaccion   = $_GET['reaccion'] ?? 'Desconocida';
    $tolerancia = $_GET['tolerancia'] ?? '0';
    
    // 2. Manejo de Checkboxes (Array)
    // Usamos implode para convertir el array en una cadena legible
    $equipo = isset($_GET['equipo']) ? implode(", ", $_GET['equipo']) : "Ninguno";

    // 3. El textarea (ahora con name="voluntad")
    $voluntad = $_GET['voluntad'] ?? 'Ninguna (será ignorada de todos modos)';

    // Output para el usuario
    echo "<h2>--- REPORTE DE RECLUTAMIENTO ---</h2>";
    echo "<b>Recluta:</b> " . htmlspecialchars($usuario) . "<br>";
    echo "<b>Prioridad afectiva:</b> " . htmlspecialchars($amor) . "<br>";
    echo "<b>Reacción ante Terminidios:</b> " . htmlspecialchars($reaccion) . "<br>";
    echo "<b>Tolerancia al fuego amigo:</b> " . htmlspecialchars($tolerancia) . "/10<br>";
    echo "<b>Equipamiento solicitado:</b> " . htmlspecialchars($equipo) . "<br>";
    echo "<b>Última voluntad:</b> " . htmlspecialchars($voluntad) . "<br>";
    echo "<p><i>¡La Democracia Gestionada te agradece tu sacrificio!</i></p>";
} else {
    echo "Esperando datos del frente...";
}
?>
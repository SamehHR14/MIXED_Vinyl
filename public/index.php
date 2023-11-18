<?php

use App\Kernel;

require dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    $appEnv = $context['APP_ENV'] ?? 'dev'; // Utilisation d'une valeur par défaut si 'APP_ENV' n'est pas défini.
    $appDebug = isset($context['APP_DEBUG']) ? (bool) $context['APP_DEBUG'] : true; // Utilisation de la valeur par défaut true si 'APP_DEBUG' n'est pas défini.

    return new Kernel($appEnv, $appDebug);
};

<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * este lo voy a comentar mal
 * asi lo arregla
 * php-cs-fixer
 */
class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function Prueba(): int
    {
        $foo ??= 1;
    }
}

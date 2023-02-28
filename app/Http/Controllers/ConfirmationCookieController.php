<?php

namespace Danshin\CookieNotice\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\JsonResponse;
use Danshin\CookieNotice\Http\Requests\ConfirmationCookieRequest as Request;

final class ConfirmationCookieController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $cookie = cookie("cookie_confirmed", "1", 0, "/");

        return response()
            ->json(['success' => true])
            ->cookie($cookie);
    }
}

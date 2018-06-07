<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use PhpParser\Node\Expr\Cast\Object_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/api")
 */
class HomeController
{
	/**
	 * @Route("/login")
	 */
	public function login(Request $request)
	{
		$loginResponse = new \stdClass();

		$response = json_encode($loginResponse);
		return new Response(
			$response
		);
	}
}
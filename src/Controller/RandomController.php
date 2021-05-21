<?php

declare(strict_types=1);

namespace App\Controller;

use App\Me;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class RandomController extends AbstractController
{
        public function __invoke(Me $randomService)
        {
            //
        }
}
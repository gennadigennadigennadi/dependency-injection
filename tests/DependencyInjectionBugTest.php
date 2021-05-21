<?php 

declare(strict_types=1);

namespace App\Tests;

use App\Me;
use App\RandomRandomService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;;

final class DependencyInjectionBugTest extends KernelTestCase
{
    public function testItRegistersService(): void
    {
        self::bootKernel();

        /** @var RandomRandomService $service */
        $service = self::$container->get('myService');

        self::assertSame([], $service->me->names);
        self::assertSame(['jeans', 'shirt'], $service->me->clothes);
    }
}

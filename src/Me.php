<?php 

declare(strict_types=1);

namespace App;

final class Me
{
    public function __construct(
        public array $names = [],
        public array $clothes = [],
        )
    {}
}

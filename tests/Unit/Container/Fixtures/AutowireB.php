<?php

declare(strict_types=1);

namespace Tests\Tempest\Unit\Container\Fixtures;

final readonly class AutowireB
{
    public function __construct(public AutowireC $c)
    {
    }
}

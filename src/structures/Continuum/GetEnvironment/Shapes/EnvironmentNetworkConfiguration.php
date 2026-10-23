<?php

namespace Sunaoka\Aws\Structures\Continuum\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedDomains
 */
class EnvironmentNetworkConfiguration extends Shape
{
    /**
     * @param array{allowedDomains?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

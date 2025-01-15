<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpName
 */
class HttpProperties extends Shape
{
    /**
     * @param array{HttpName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

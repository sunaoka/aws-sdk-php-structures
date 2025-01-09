<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpName
 */
class HttpProperties extends Shape
{
    /**
     * @param array{HttpName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

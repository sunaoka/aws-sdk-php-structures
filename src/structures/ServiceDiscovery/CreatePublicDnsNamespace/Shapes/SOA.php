<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TTL
 */
class SOA extends Shape
{
    /**
     * @param array{TTL: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

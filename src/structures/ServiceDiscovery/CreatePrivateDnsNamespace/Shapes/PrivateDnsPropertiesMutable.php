<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePrivateDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SOA $SOA
 */
class PrivateDnsPropertiesMutable extends Shape
{
    /**
     * @param array{SOA: SOA} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

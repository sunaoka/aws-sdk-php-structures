<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePrivateDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SOAChange $SOA
 */
class PrivateDnsPropertiesMutableChange extends Shape
{
    /**
     * @param array{SOA: SOAChange} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

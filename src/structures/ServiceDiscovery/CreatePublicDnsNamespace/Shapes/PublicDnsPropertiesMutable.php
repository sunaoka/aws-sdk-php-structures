<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SOA $SOA
 */
class PublicDnsPropertiesMutable extends Shape
{
    /**
     * @param array{SOA: SOA} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

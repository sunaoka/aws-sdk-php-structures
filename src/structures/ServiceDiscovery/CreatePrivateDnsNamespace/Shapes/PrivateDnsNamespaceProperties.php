<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePrivateDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivateDnsPropertiesMutable $DnsProperties
 */
class PrivateDnsNamespaceProperties extends Shape
{
    /**
     * @param array{DnsProperties: PrivateDnsPropertiesMutable} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

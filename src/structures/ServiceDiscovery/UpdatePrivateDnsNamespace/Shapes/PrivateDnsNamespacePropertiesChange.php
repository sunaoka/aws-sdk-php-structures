<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePrivateDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivateDnsPropertiesMutableChange $DnsProperties
 */
class PrivateDnsNamespacePropertiesChange extends Shape
{
    /**
     * @param array{DnsProperties: PrivateDnsPropertiesMutableChange} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

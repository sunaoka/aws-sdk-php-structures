<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicDnsPropertiesMutableChange $DnsProperties
 */
class PublicDnsNamespacePropertiesChange extends Shape
{
    /**
     * @param array{DnsProperties: PublicDnsPropertiesMutableChange} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

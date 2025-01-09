<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicDnsPropertiesMutable $DnsProperties
 */
class PublicDnsNamespaceProperties extends Shape
{
    /**
     * @param array{DnsProperties: PublicDnsPropertiesMutable} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

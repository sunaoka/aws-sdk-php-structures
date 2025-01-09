<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SOAChange $SOA
 */
class PublicDnsPropertiesMutableChange extends Shape
{
    /**
     * @param array{SOA: SOAChange} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

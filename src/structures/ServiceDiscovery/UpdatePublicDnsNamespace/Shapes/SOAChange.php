<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $TTL
 */
class SOAChange extends Shape
{
    /**
     * @param array{TTL: int<0, 2147483647>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

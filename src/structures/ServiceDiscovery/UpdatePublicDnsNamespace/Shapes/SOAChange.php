<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdatePublicDnsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TTL
 */
class SOAChange extends Shape
{
    /**
     * @param array{TTL: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

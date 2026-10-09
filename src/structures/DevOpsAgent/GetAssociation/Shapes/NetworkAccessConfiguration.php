<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivateNetworkAccess|null $privateAccess
 */
class NetworkAccessConfiguration extends Shape
{
    /**
     * @param array{privateAccess?: PrivateNetworkAccess|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectivityClientAuthentication $ClientAuthentication
 */
class VpcConnectivity extends Shape
{
    /**
     * @param array{ClientAuthentication?: VpcConnectivityClientAuthentication} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

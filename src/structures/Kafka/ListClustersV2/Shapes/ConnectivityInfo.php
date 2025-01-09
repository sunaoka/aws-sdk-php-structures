<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicAccess $PublicAccess
 * @property VpcConnectivity $VpcConnectivity
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     PublicAccess?: PublicAccess,
     *     VpcConnectivity?: VpcConnectivity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

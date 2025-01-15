<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicAccess|null $PublicAccess
 * @property VpcConnectivity|null $VpcConnectivity
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     PublicAccess?: PublicAccess|null,
     *     VpcConnectivity?: VpcConnectivity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

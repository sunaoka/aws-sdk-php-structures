<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicAccess|null $PublicAccess
 * @property VpcConnectivity|null $VpcConnectivity
 * @property 'IPV4'|'DUAL'|null $NetworkType
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     PublicAccess?: PublicAccess|null,
     *     VpcConnectivity?: VpcConnectivity|null,
     *     NetworkType?: 'IPV4'|'DUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

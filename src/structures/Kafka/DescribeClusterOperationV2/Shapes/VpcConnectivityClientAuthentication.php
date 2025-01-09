<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectivitySasl $Sasl
 * @property VpcConnectivityTls $Tls
 */
class VpcConnectivityClientAuthentication extends Shape
{
    /**
     * @param array{
     *     Sasl?: VpcConnectivitySasl,
     *     Tls?: VpcConnectivityTls
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

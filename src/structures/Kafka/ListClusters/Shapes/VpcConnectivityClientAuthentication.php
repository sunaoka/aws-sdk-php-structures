<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectivitySasl|null $Sasl
 * @property VpcConnectivityTls|null $Tls
 */
class VpcConnectivityClientAuthentication extends Shape
{
    /**
     * @param array{
     *     Sasl?: VpcConnectivitySasl|null,
     *     Tls?: VpcConnectivityTls|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

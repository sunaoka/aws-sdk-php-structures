<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectivityScram $Scram
 * @property VpcConnectivityIam $Iam
 */
class VpcConnectivitySasl extends Shape
{
    /**
     * @param array{
     *     Scram?: VpcConnectivityScram,
     *     Iam?: VpcConnectivityIam
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

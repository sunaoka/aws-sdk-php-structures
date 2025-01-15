<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectivityScram|null $Scram
 * @property VpcConnectivityIam|null $Iam
 */
class VpcConnectivitySasl extends Shape
{
    /**
     * @param array{
     *     Scram?: VpcConnectivityScram|null,
     *     Iam?: VpcConnectivityIam|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

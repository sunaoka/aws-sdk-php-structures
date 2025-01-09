<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectionInfoServerless $VpcConnectionInfo
 */
class ClusterOperationV2Serverless extends Shape
{
    /**
     * @param array{VpcConnectionInfo?: VpcConnectionInfoServerless} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

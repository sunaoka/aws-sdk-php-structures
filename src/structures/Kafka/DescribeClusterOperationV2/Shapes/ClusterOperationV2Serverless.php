<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerlessConnectivityInfo|null $SourceClusterInfo
 * @property ServerlessConnectivityInfo|null $TargetClusterInfo
 * @property VpcConnectionInfoServerless|null $VpcConnectionInfo
 */
class ClusterOperationV2Serverless extends Shape
{
    /**
     * @param array{
     *     SourceClusterInfo?: ServerlessConnectivityInfo|null,
     *     TargetClusterInfo?: ServerlessConnectivityInfo|null,
     *     VpcConnectionInfo?: VpcConnectionInfoServerless|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

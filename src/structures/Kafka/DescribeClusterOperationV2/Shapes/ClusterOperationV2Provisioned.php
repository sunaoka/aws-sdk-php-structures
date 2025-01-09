<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClusterOperationStep> $OperationSteps
 * @property MutableClusterInfo $SourceClusterInfo
 * @property MutableClusterInfo $TargetClusterInfo
 * @property VpcConnectionInfo $VpcConnectionInfo
 */
class ClusterOperationV2Provisioned extends Shape
{
    /**
     * @param array{
     *     OperationSteps?: list<ClusterOperationStep>,
     *     SourceClusterInfo?: MutableClusterInfo,
     *     TargetClusterInfo?: MutableClusterInfo,
     *     VpcConnectionInfo?: VpcConnectionInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

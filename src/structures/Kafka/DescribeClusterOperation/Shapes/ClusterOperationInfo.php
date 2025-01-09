<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientRequestId
 * @property string $ClusterArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property ErrorInfo $ErrorInfo
 * @property list<ClusterOperationStep> $OperationSteps
 * @property string $OperationArn
 * @property string $OperationState
 * @property string $OperationType
 * @property MutableClusterInfo $SourceClusterInfo
 * @property MutableClusterInfo $TargetClusterInfo
 * @property VpcConnectionInfo $VpcConnectionInfo
 */
class ClusterOperationInfo extends Shape
{
    /**
     * @param array{
     *     ClientRequestId?: string,
     *     ClusterArn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ErrorInfo?: ErrorInfo,
     *     OperationSteps?: list<ClusterOperationStep>,
     *     OperationArn?: string,
     *     OperationState?: string,
     *     OperationType?: string,
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

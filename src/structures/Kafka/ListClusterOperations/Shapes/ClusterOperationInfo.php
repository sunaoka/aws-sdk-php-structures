<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientRequestId
 * @property string|null $ClusterArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property ErrorInfo|null $ErrorInfo
 * @property list<ClusterOperationStep>|null $OperationSteps
 * @property string|null $OperationArn
 * @property string|null $OperationState
 * @property string|null $OperationType
 * @property MutableClusterInfo|null $SourceClusterInfo
 * @property MutableClusterInfo|null $TargetClusterInfo
 * @property VpcConnectionInfo|null $VpcConnectionInfo
 */
class ClusterOperationInfo extends Shape
{
    /**
     * @param array{
     *     ClientRequestId?: string|null,
     *     ClusterArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ErrorInfo?: ErrorInfo|null,
     *     OperationSteps?: list<ClusterOperationStep>|null,
     *     OperationArn?: string|null,
     *     OperationState?: string|null,
     *     OperationType?: string|null,
     *     SourceClusterInfo?: MutableClusterInfo|null,
     *     TargetClusterInfo?: MutableClusterInfo|null,
     *     VpcConnectionInfo?: VpcConnectionInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

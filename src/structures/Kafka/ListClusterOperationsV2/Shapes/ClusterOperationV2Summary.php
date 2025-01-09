<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property 'PROVISIONED'|'SERVERLESS' $ClusterType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $OperationArn
 * @property string $OperationState
 * @property string $OperationType
 */
class ClusterOperationV2Summary extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     ClusterType?: 'PROVISIONED'|'SERVERLESS',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     OperationArn?: string,
     *     OperationState?: string,
     *     OperationType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

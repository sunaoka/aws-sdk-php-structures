<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 * @property 'PROVISIONED'|'SERVERLESS'|null $ClusterType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $OperationArn
 * @property string|null $OperationState
 * @property string|null $OperationType
 */
class ClusterOperationV2Summary extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     ClusterType?: 'PROVISIONED'|'SERVERLESS'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     OperationArn?: string|null,
     *     OperationState?: string|null,
     *     OperationType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

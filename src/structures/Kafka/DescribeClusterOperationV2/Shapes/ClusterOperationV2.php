<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 * @property 'PROVISIONED'|'SERVERLESS'|null $ClusterType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $OperationArn
 * @property string|null $OperationState
 * @property string|null $OperationType
 * @property ClusterOperationV2Provisioned|null $Provisioned
 * @property ClusterOperationV2Serverless|null $Serverless
 */
class ClusterOperationV2 extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     ClusterType?: 'PROVISIONED'|'SERVERLESS'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     OperationArn?: string|null,
     *     OperationState?: string|null,
     *     OperationType?: string|null,
     *     Provisioned?: ClusterOperationV2Provisioned|null,
     *     Serverless?: ClusterOperationV2Serverless|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

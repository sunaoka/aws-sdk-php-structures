<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property 'PROVISIONED'|'SERVERLESS' $ClusterType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $OperationArn
 * @property string $OperationState
 * @property string $OperationType
 * @property ClusterOperationV2Provisioned $Provisioned
 * @property ClusterOperationV2Serverless $Serverless
 */
class ClusterOperationV2 extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     ClusterType?: 'PROVISIONED'|'SERVERLESS',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     OperationArn?: string,
     *     OperationState?: string,
     *     OperationType?: string,
     *     Provisioned?: ClusterOperationV2Provisioned,
     *     Serverless?: ClusterOperationV2Serverless
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

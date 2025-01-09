<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'SHUTTING_DOWN'|'TERMINATED'|'COMPLETED'|'FAILED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult $StartDateTime
 * @property \Aws\Api\DateTimeResult $ReadyDateTime
 * @property \Aws\Api\DateTimeResult $EndDateTime
 * @property string $LastStateChangeReason
 */
class JobFlowExecutionStatusDetail extends Shape
{
    /**
     * @param array{
     *     State: 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'SHUTTING_DOWN'|'TERMINATED'|'COMPLETED'|'FAILED',
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     StartDateTime?: \Aws\Api\DateTimeResult,
     *     ReadyDateTime?: \Aws\Api\DateTimeResult,
     *     EndDateTime?: \Aws\Api\DateTimeResult,
     *     LastStateChangeReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

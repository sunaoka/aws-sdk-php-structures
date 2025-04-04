<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'SHUTTING_DOWN'|'TERMINATED'|'COMPLETED'|'FAILED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult|null $StartDateTime
 * @property \Aws\Api\DateTimeResult|null $ReadyDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 * @property string|null $LastStateChangeReason
 */
class JobFlowExecutionStatusDetail extends Shape
{
    /**
     * @param array{
     *     State: 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'SHUTTING_DOWN'|'TERMINATED'|'COMPLETED'|'FAILED',
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     StartDateTime?: \Aws\Api\DateTimeResult|null,
     *     ReadyDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastStateChangeReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

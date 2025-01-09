<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'RUNNING'|'CONTINUE'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult $StartDateTime
 * @property \Aws\Api\DateTimeResult $EndDateTime
 * @property string $LastStateChangeReason
 */
class StepExecutionStatusDetail extends Shape
{
    /**
     * @param array{
     *     State: 'PENDING'|'RUNNING'|'CONTINUE'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED',
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     StartDateTime?: \Aws\Api\DateTimeResult,
     *     EndDateTime?: \Aws\Api\DateTimeResult,
     *     LastStateChangeReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

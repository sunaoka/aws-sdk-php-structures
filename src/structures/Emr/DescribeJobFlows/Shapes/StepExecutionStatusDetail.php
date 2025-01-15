<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'RUNNING'|'CONTINUE'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult|null $StartDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 * @property string|null $LastStateChangeReason
 */
class StepExecutionStatusDetail extends Shape
{
    /**
     * @param array{
     *     State: 'PENDING'|'RUNNING'|'CONTINUE'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED',
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     StartDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastStateChangeReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

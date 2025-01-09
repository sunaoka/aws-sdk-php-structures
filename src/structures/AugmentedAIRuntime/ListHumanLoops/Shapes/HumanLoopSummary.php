<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\ListHumanLoops\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HumanLoopName
 * @property 'InProgress'|'Failed'|'Completed'|'Stopped'|'Stopping' $HumanLoopStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property string $FlowDefinitionArn
 */
class HumanLoopSummary extends Shape
{
    /**
     * @param array{
     *     HumanLoopName?: string,
     *     HumanLoopStatus?: 'InProgress'|'Failed'|'Completed'|'Stopped'|'Stopping',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     FlowDefinitionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

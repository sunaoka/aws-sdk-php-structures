<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\ListHumanLoops\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HumanLoopName
 * @property 'InProgress'|'Failed'|'Completed'|'Stopped'|'Stopping'|null $HumanLoopStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureReason
 * @property string|null $FlowDefinitionArn
 */
class HumanLoopSummary extends Shape
{
    /**
     * @param array{
     *     HumanLoopName?: string|null,
     *     HumanLoopStatus?: 'InProgress'|'Failed'|'Completed'|'Stopped'|'Stopping'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     FlowDefinitionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

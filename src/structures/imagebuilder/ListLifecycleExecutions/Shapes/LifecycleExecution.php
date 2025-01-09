<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lifecycleExecutionId
 * @property string $lifecyclePolicyArn
 * @property LifecycleExecutionResourcesImpactedSummary $resourcesImpactedSummary
 * @property LifecycleExecutionState $state
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class LifecycleExecution extends Shape
{
    /**
     * @param array{
     *     lifecycleExecutionId?: string,
     *     lifecyclePolicyArn?: string,
     *     resourcesImpactedSummary?: LifecycleExecutionResourcesImpactedSummary,
     *     state?: LifecycleExecutionState,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lifecycleExecutionId
 * @property string|null $lifecyclePolicyArn
 * @property LifecycleExecutionResourcesImpactedSummary|null $resourcesImpactedSummary
 * @property LifecycleExecutionState|null $state
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class LifecycleExecution extends Shape
{
    /**
     * @param array{
     *     lifecycleExecutionId?: string|null,
     *     lifecyclePolicyArn?: string|null,
     *     resourcesImpactedSummary?: LifecycleExecutionResourcesImpactedSummary|null,
     *     state?: LifecycleExecutionState|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

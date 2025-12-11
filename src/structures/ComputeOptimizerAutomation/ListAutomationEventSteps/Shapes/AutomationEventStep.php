<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventId
 * @property string|null $stepId
 * @property 'CreateEbsSnapshot'|'DeleteEbsVolume'|'ModifyEbsVolume'|'CreateEbsVolume'|null $stepType
 * @property 'Ready'|'InProgress'|'Complete'|'Failed'|null $stepStatus
 * @property string|null $resourceId
 * @property \Aws\Api\DateTimeResult|null $startTimestamp
 * @property \Aws\Api\DateTimeResult|null $completedTimestamp
 * @property EstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class AutomationEventStep extends Shape
{
    /**
     * @param array{
     *     eventId?: string|null,
     *     stepId?: string|null,
     *     stepType?: 'CreateEbsSnapshot'|'DeleteEbsVolume'|'ModifyEbsVolume'|'CreateEbsVolume'|null,
     *     stepStatus?: 'Ready'|'InProgress'|'Complete'|'Failed'|null,
     *     resourceId?: string|null,
     *     startTimestamp?: \Aws\Api\DateTimeResult|null,
     *     completedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

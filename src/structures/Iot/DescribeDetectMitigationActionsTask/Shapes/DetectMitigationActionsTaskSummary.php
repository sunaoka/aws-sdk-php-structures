<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDetectMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELED'|null $taskStatus
 * @property \Aws\Api\DateTimeResult|null $taskStartTime
 * @property \Aws\Api\DateTimeResult|null $taskEndTime
 * @property DetectMitigationActionsTaskTarget|null $target
 * @property ViolationEventOccurrenceRange|null $violationEventOccurrenceRange
 * @property bool|null $onlyActiveViolationsIncluded
 * @property bool|null $suppressedAlertsIncluded
 * @property list<MitigationAction>|null $actionsDefinition
 * @property DetectMitigationActionsTaskStatistics|null $taskStatistics
 */
class DetectMitigationActionsTaskSummary extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     taskStatus?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELED'|null,
     *     taskStartTime?: \Aws\Api\DateTimeResult|null,
     *     taskEndTime?: \Aws\Api\DateTimeResult|null,
     *     target?: DetectMitigationActionsTaskTarget|null,
     *     violationEventOccurrenceRange?: ViolationEventOccurrenceRange|null,
     *     onlyActiveViolationsIncluded?: bool|null,
     *     suppressedAlertsIncluded?: bool|null,
     *     actionsDefinition?: list<MitigationAction>|null,
     *     taskStatistics?: DetectMitigationActionsTaskStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELED' $taskStatus
 * @property \Aws\Api\DateTimeResult $taskStartTime
 * @property \Aws\Api\DateTimeResult $taskEndTime
 * @property DetectMitigationActionsTaskTarget $target
 * @property ViolationEventOccurrenceRange $violationEventOccurrenceRange
 * @property bool $onlyActiveViolationsIncluded
 * @property bool $suppressedAlertsIncluded
 * @property list<MitigationAction> $actionsDefinition
 * @property DetectMitigationActionsTaskStatistics $taskStatistics
 */
class DetectMitigationActionsTaskSummary extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     taskStatus?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELED',
     *     taskStartTime?: \Aws\Api\DateTimeResult,
     *     taskEndTime?: \Aws\Api\DateTimeResult,
     *     target?: DetectMitigationActionsTaskTarget,
     *     violationEventOccurrenceRange?: ViolationEventOccurrenceRange,
     *     onlyActiveViolationsIncluded?: bool,
     *     suppressedAlertsIncluded?: bool,
     *     actionsDefinition?: list<MitigationAction>,
     *     taskStatistics?: DetectMitigationActionsTaskStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

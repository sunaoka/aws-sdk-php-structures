<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlanExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $planArn
 * @property string $executionId
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $comment
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'graceful'|'ungraceful' $mode
 * @property 'inProgress'|'pausedByFailedStep'|'pausedByOperator'|'completed'|'completedWithExceptions'|'canceled'|'planExecutionTimedOut'|'pendingManualApproval'|'failed'|'pending'|'completedMonitoringApplicationHealth' $executionState
 * @property 'activate'|'deactivate' $executionAction
 * @property string $executionRegion
 * @property string|null $actualRecoveryTime
 */
class AbbreviatedExecution extends Shape
{
    /**
     * @param array{
     *     planArn: string,
     *     executionId: string,
     *     version?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     comment?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     mode: 'graceful'|'ungraceful',
     *     executionState: 'inProgress'|'pausedByFailedStep'|'pausedByOperator'|'completed'|'completedWithExceptions'|'canceled'|'planExecutionTimedOut'|'pendingManualApproval'|'failed'|'pending'|'completedMonitoringApplicationHealth',
     *     executionAction: 'activate'|'deactivate',
     *     executionRegion: string,
     *     actualRecoveryTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

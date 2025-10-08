<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlanExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'inProgress'|'pausedByFailedStep'|'pausedByOperator'|'completed'|'completedWithExceptions'|'canceled'|'planExecutionTimedOut'|'pendingManualApproval'|'failed'|'pending'|'completedMonitoringApplicationHealth'|null $state
 */
class ListPlanExecutionsRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     state?: 'inProgress'|'pausedByFailedStep'|'pausedByOperator'|'completed'|'completedWithExceptions'|'canceled'|'planExecutionTimedOut'|'pendingManualApproval'|'failed'|'pending'|'completedMonitoringApplicationHealth'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stepId
 * @property string|null $name
 * @property 'MANUAL'|'AUTOMATED'|null $stepActionType
 * @property 'AWS_MANAGED'|'CUSTOM'|null $owner
 * @property list<string>|null $previous
 * @property list<string>|null $next
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'|null $status
 * @property string|null $statusMessage
 * @property int|null $noOfSrvCompleted
 * @property int|null $noOfSrvFailed
 * @property int|null $totalNoOfSrv
 * @property string|null $description
 * @property string|null $scriptLocation
 */
class WorkflowStepSummary extends Shape
{
    /**
     * @param array{
     *     stepId?: string|null,
     *     name?: string|null,
     *     stepActionType?: 'MANUAL'|'AUTOMATED'|null,
     *     owner?: 'AWS_MANAGED'|'CUSTOM'|null,
     *     previous?: list<string>|null,
     *     next?: list<string>|null,
     *     status?: 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'|null,
     *     statusMessage?: string|null,
     *     noOfSrvCompleted?: int|null,
     *     noOfSrvFailed?: int|null,
     *     totalNoOfSrv?: int|null,
     *     description?: string|null,
     *     scriptLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

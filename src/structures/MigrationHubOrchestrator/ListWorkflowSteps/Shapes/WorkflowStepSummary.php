<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepId
 * @property string $name
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property 'AWS_MANAGED'|'CUSTOM' $owner
 * @property list<string> $previous
 * @property list<string> $next
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED' $status
 * @property string $statusMessage
 * @property int $noOfSrvCompleted
 * @property int $noOfSrvFailed
 * @property int $totalNoOfSrv
 * @property string $description
 * @property string $scriptLocation
 */
class WorkflowStepSummary extends Shape
{
    /**
     * @param array{
     *     stepId?: string,
     *     name?: string,
     *     stepActionType?: 'MANUAL'|'AUTOMATED',
     *     owner?: 'AWS_MANAGED'|'CUSTOM',
     *     previous?: list<string>,
     *     next?: list<string>,
     *     status?: 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED',
     *     statusMessage?: string,
     *     noOfSrvCompleted?: int,
     *     noOfSrvFailed?: int,
     *     totalNoOfSrv?: int,
     *     description?: string,
     *     scriptLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

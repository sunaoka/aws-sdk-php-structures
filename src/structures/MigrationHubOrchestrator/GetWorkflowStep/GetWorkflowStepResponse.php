<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $stepGroupId
 * @property string|null $workflowId
 * @property string|null $stepId
 * @property string|null $description
 * @property 'MANUAL'|'AUTOMATED'|null $stepActionType
 * @property 'AWS_MANAGED'|'CUSTOM'|null $owner
 * @property Shapes\WorkflowStepAutomationConfiguration|null $workflowStepAutomationConfiguration
 * @property list<string>|null $stepTarget
 * @property list<Shapes\WorkflowStepOutput>|null $outputs
 * @property list<string>|null $previous
 * @property list<string>|null $next
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'|null $status
 * @property string|null $statusMessage
 * @property string|null $scriptOutputLocation
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastStartTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int|null $noOfSrvCompleted
 * @property int|null $noOfSrvFailed
 * @property int|null $totalNoOfSrv
 */
class GetWorkflowStepResponse extends Response
{
}

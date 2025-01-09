<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $stepGroupId
 * @property string $workflowId
 * @property string $stepId
 * @property string $description
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property 'AWS_MANAGED'|'CUSTOM' $owner
 * @property Shapes\WorkflowStepAutomationConfiguration $workflowStepAutomationConfiguration
 * @property list<string> $stepTarget
 * @property list<Shapes\WorkflowStepOutput> $outputs
 * @property list<string> $previous
 * @property list<string> $next
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED' $status
 * @property string $statusMessage
 * @property string $scriptOutputLocation
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastStartTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $noOfSrvCompleted
 * @property int $noOfSrvFailed
 * @property int $totalNoOfSrv
 */
class GetWorkflowStepResponse extends Response
{
}

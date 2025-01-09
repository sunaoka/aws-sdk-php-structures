<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $templateId
 * @property string $adsApplicationConfigurationId
 * @property string $adsApplicationName
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastStartTime
 * @property \Aws\Api\DateTimeResult $lastStopTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<Shapes\Tool> $tools
 * @property int $totalSteps
 * @property int $completedSteps
 * @property array<string, Shapes\StepInput> $workflowInputs
 * @property array<string, string> $tags
 * @property string $workflowBucket
 */
class GetWorkflowResponse extends Response
{
}

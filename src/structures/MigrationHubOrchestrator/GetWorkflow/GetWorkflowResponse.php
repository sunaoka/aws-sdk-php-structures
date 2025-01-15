<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $templateId
 * @property string|null $adsApplicationConfigurationId
 * @property string|null $adsApplicationName
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastStartTime
 * @property \Aws\Api\DateTimeResult|null $lastStopTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property list<Shapes\Tool>|null $tools
 * @property int|null $totalSteps
 * @property int|null $completedSteps
 * @property array<string, Shapes\StepInput>|null $workflowInputs
 * @property array<string, string>|null $tags
 * @property string|null $workflowBucket
 */
class GetWorkflowResponse extends Response
{
}

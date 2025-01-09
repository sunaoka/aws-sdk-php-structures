<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $templateId
 * @property string $adsApplicationConfigurationId
 * @property array<string, Shapes\StepInput> $workflowInputs
 * @property list<string> $stepTargets
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property array<string, string> $tags
 */
class CreateWorkflowResponse extends Response
{
}

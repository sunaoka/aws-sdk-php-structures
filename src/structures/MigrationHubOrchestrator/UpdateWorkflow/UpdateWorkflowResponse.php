<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $templateId
 * @property string|null $adsApplicationConfigurationId
 * @property array<string, Shapes\StepInput>|null $workflowInputs
 * @property list<string>|null $stepTargets
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property array<string, string>|null $tags
 */
class UpdateWorkflowResponse extends Response
{
}

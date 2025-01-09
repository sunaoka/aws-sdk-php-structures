<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\StartWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $lastStartTime
 */
class StartWorkflowResponse extends Response
{
}

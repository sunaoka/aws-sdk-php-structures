<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\StopWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $lastStopTime
 */
class StopWorkflowResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\RetryWorkflowStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $stepGroupId
 * @property string|null $workflowId
 * @property string|null $id
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'|null $status
 */
class RetryWorkflowStepResponse extends Response
{
}

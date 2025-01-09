<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\RetryWorkflowStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stepGroupId
 * @property string $workflowId
 * @property string $id
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED' $status
 */
class RetryWorkflowStepResponse extends Response
{
}

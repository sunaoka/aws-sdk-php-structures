<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowStepExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $requestId
 * @property string $stepExecutionId
 * @property string $workflowBuildVersionArn
 * @property string $workflowExecutionId
 * @property string $imageBuildVersionArn
 * @property string $name
 * @property string $description
 * @property string $action
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED' $status
 * @property 'RUNNING'|'COMPLETED'|'SKIPPED'|'FAILED' $rollbackStatus
 * @property string $message
 * @property string $inputs
 * @property string $outputs
 * @property string $startTime
 * @property string $endTime
 * @property string $onFailure
 * @property int $timeoutSeconds
 */
class GetWorkflowStepExecutionResponse extends Response
{
}

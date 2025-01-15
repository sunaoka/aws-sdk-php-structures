<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowStepExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $requestId
 * @property string|null $stepExecutionId
 * @property string|null $workflowBuildVersionArn
 * @property string|null $workflowExecutionId
 * @property string|null $imageBuildVersionArn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $action
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $status
 * @property 'RUNNING'|'COMPLETED'|'SKIPPED'|'FAILED'|null $rollbackStatus
 * @property string|null $message
 * @property string|null $inputs
 * @property string|null $outputs
 * @property string|null $startTime
 * @property string|null $endTime
 * @property string|null $onFailure
 * @property int<0, 43200>|null $timeoutSeconds
 */
class GetWorkflowStepExecutionResponse extends Response
{
}

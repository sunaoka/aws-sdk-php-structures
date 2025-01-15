<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $requestId
 * @property string|null $workflowBuildVersionArn
 * @property string|null $workflowExecutionId
 * @property string|null $imageBuildVersionArn
 * @property 'BUILD'|'TEST'|'DISTRIBUTION'|null $type
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETED'|'CANCELLED'|null $status
 * @property string|null $message
 * @property int|null $totalStepCount
 * @property int|null $totalStepsSucceeded
 * @property int|null $totalStepsFailed
 * @property int|null $totalStepsSkipped
 * @property string|null $startTime
 * @property string|null $endTime
 * @property string|null $parallelGroup
 */
class GetWorkflowExecutionResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $requestId
 * @property string $workflowBuildVersionArn
 * @property string $workflowExecutionId
 * @property string $imageBuildVersionArn
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETED'|'CANCELLED' $status
 * @property string $message
 * @property int $totalStepCount
 * @property int $totalStepsSucceeded
 * @property int $totalStepsFailed
 * @property int $totalStepsSkipped
 * @property string $startTime
 * @property string $endTime
 * @property string $parallelGroup
 */
class GetWorkflowExecutionResponse extends Response
{
}

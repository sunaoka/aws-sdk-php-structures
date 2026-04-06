<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionId
 * @property string|null $actionType
 * @property Shapes\TargetResource $targetResource
 * @property string $targetResourceVersion
 * @property Shapes\ResolveTo|null $resolveTo
 * @property \Aws\Api\DateTimeResult $executionStartTime
 * @property \Aws\Api\DateTimeResult|null $executionEndTime
 * @property Shapes\ExecutionStatus $executionStatus
 * @property array<string, string>|null $executionResult
 * @property array<string, string>|null $executionDetails
 * @property string|null $executionEntityVersion
 */
class DescribeExecutionResponse extends Response
{
}

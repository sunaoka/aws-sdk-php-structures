<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $pipelineExecutionId
 * @property string $pipelineName
 * @property string $workspaceName
 * @property string $pipelineVersion
 * @property Shapes\PipelineExecutionStatus $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\ExecutionEnvironmentVariables $requestEnvironmentVariables
 * @property int<0, 2>|null $executionPriority
 * @property list<Shapes\ComputeNodeExecutionDetails> $computeNodeExecutionDetails
 * @property string|null $nextToken
 */
class DescribePipelineExecutionResponse extends Response
{
}

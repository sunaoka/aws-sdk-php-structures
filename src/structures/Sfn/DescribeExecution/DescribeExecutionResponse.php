<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionArn
 * @property string $stateMachineArn
 * @property string|null $name
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED' $status
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult|null $stopDate
 * @property string|null $input
 * @property Shapes\CloudWatchEventsExecutionDataDetails|null $inputDetails
 * @property string|null $output
 * @property Shapes\CloudWatchEventsExecutionDataDetails|null $outputDetails
 * @property string|null $traceHeader
 * @property string|null $mapRunArn
 * @property string|null $error
 * @property string|null $cause
 * @property string|null $stateMachineVersionArn
 * @property string|null $stateMachineAliasArn
 */
class DescribeExecutionResponse extends Response
{
}

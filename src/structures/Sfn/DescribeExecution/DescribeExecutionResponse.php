<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionArn
 * @property string $stateMachineArn
 * @property string $name
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|'PENDING_REDRIVE' $status
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $stopDate
 * @property string $input
 * @property Shapes\CloudWatchEventsExecutionDataDetails $inputDetails
 * @property string $output
 * @property Shapes\CloudWatchEventsExecutionDataDetails $outputDetails
 * @property string $traceHeader
 * @property string $mapRunArn
 * @property string $error
 * @property string $cause
 * @property string $stateMachineVersionArn
 * @property string $stateMachineAliasArn
 * @property int $redriveCount
 * @property \Aws\Api\DateTimeResult $redriveDate
 * @property 'REDRIVABLE'|'NOT_REDRIVABLE'|'REDRIVABLE_BY_MAP_RUN' $redriveStatus
 * @property string $redriveStatusReason
 */
class DescribeExecutionResponse extends Response
{
}

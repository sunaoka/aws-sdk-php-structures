<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionArn
 * @property string $stateMachineArn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $stopDate
 * @property 'SUCCEEDED'|'FAILED'|'TIMED_OUT' $status
 * @property string $error
 * @property string $cause
 * @property string $input
 * @property Shapes\CloudWatchEventsExecutionDataDetails $inputDetails
 * @property string $output
 * @property Shapes\CloudWatchEventsExecutionDataDetails $outputDetails
 * @property string $traceHeader
 * @property Shapes\BillingDetails $billingDetails
 */
class StartSyncExecutionResponse extends Response
{
}

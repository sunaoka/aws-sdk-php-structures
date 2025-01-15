<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionArn
 * @property string|null $stateMachineArn
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $stopDate
 * @property 'SUCCEEDED'|'FAILED'|'TIMED_OUT' $status
 * @property string|null $error
 * @property string|null $cause
 * @property string|null $input
 * @property Shapes\CloudWatchEventsExecutionDataDetails|null $inputDetails
 * @property string|null $output
 * @property Shapes\CloudWatchEventsExecutionDataDetails|null $outputDetails
 * @property string|null $traceHeader
 * @property Shapes\BillingDetails|null $billingDetails
 */
class StartSyncExecutionResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DurableExecutionArn
 * @property string $DurableExecutionName
 * @property string $FunctionArn
 * @property string|null $InputPayload
 * @property string|null $Result
 * @property Shapes\ErrorObject|null $Error
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property string|null $Version
 * @property Shapes\TraceHeader|null $TraceHeader
 */
class GetDurableExecutionResponse extends Response
{
}

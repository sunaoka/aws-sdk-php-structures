<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetTaskInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkflowArn
 * @property string $RunId
 * @property string $TaskInstanceId
 * @property string|null $WorkflowVersion
 * @property 'QUEUED'|'FAILED'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'UP_FOR_RESCHEDULE'|'UP_FOR_RETRY'|'UPSTREAM_FAILED'|'REMOVED'|'RESTARTING'|'DEFERRED'|'NONE'|'CANCELLED'|'TIMEOUT'|null $Status
 * @property int|null $DurationInSeconds
 * @property string|null $OperatorName
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property int|null $AttemptNumber
 * @property string|null $ErrorMessage
 * @property string|null $TaskId
 * @property string|null $LogStream
 * @property array<string, string>|null $Xcom
 */
class GetTaskInstanceResponse extends Response
{
}

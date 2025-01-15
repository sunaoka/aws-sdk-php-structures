<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCommandInvocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CommandId
 * @property string|null $InstanceId
 * @property string|null $Comment
 * @property string|null $DocumentName
 * @property string|null $DocumentVersion
 * @property string|null $PluginName
 * @property int|null $ResponseCode
 * @property string|null $ExecutionStartDateTime
 * @property string|null $ExecutionElapsedTime
 * @property string|null $ExecutionEndDateTime
 * @property 'Pending'|'InProgress'|'Delayed'|'Success'|'Cancelled'|'TimedOut'|'Failed'|'Cancelling'|null $Status
 * @property string|null $StatusDetails
 * @property string|null $StandardOutputContent
 * @property string|null $StandardOutputUrl
 * @property string|null $StandardErrorContent
 * @property string|null $StandardErrorUrl
 * @property Shapes\CloudWatchOutputConfig|null $CloudWatchOutputConfig
 */
class GetCommandInvocationResponse extends Response
{
}

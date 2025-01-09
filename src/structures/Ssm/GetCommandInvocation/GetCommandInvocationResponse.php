<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCommandInvocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property string $Comment
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property string $PluginName
 * @property int $ResponseCode
 * @property string $ExecutionStartDateTime
 * @property string $ExecutionElapsedTime
 * @property string $ExecutionEndDateTime
 * @property 'Pending'|'InProgress'|'Delayed'|'Success'|'Cancelled'|'TimedOut'|'Failed'|'Cancelling' $Status
 * @property string $StatusDetails
 * @property string $StandardOutputContent
 * @property string $StandardOutputUrl
 * @property string $StandardErrorContent
 * @property string $StandardErrorUrl
 * @property Shapes\CloudWatchOutputConfig $CloudWatchOutputConfig
 */
class GetCommandInvocationResponse extends Response
{
}

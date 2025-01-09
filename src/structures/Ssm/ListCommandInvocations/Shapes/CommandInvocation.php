<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property string $InstanceName
 * @property string $Comment
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property \Aws\Api\DateTimeResult $RequestedDateTime
 * @property 'Pending'|'InProgress'|'Delayed'|'Success'|'Cancelled'|'TimedOut'|'Failed'|'Cancelling' $Status
 * @property string $StatusDetails
 * @property string $TraceOutput
 * @property string $StandardOutputUrl
 * @property string $StandardErrorUrl
 * @property list<CommandPlugin> $CommandPlugins
 * @property string $ServiceRole
 * @property NotificationConfig $NotificationConfig
 * @property CloudWatchOutputConfig $CloudWatchOutputConfig
 */
class CommandInvocation extends Shape
{
    /**
     * @param array{
     *     CommandId?: string,
     *     InstanceId?: string,
     *     InstanceName?: string,
     *     Comment?: string,
     *     DocumentName?: string,
     *     DocumentVersion?: string,
     *     RequestedDateTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'Pending'|'InProgress'|'Delayed'|'Success'|'Cancelled'|'TimedOut'|'Failed'|'Cancelling',
     *     StatusDetails?: string,
     *     TraceOutput?: string,
     *     StandardOutputUrl?: string,
     *     StandardErrorUrl?: string,
     *     CommandPlugins?: list<CommandPlugin>,
     *     ServiceRole?: string,
     *     NotificationConfig?: NotificationConfig,
     *     CloudWatchOutputConfig?: CloudWatchOutputConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

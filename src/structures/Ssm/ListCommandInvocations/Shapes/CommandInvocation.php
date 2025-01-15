<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CommandId
 * @property string|null $InstanceId
 * @property string|null $InstanceName
 * @property string|null $Comment
 * @property string|null $DocumentName
 * @property string|null $DocumentVersion
 * @property \Aws\Api\DateTimeResult|null $RequestedDateTime
 * @property 'Pending'|'InProgress'|'Delayed'|'Success'|'Cancelled'|'TimedOut'|'Failed'|'Cancelling'|null $Status
 * @property string|null $StatusDetails
 * @property string|null $TraceOutput
 * @property string|null $StandardOutputUrl
 * @property string|null $StandardErrorUrl
 * @property list<CommandPlugin>|null $CommandPlugins
 * @property string|null $ServiceRole
 * @property NotificationConfig|null $NotificationConfig
 * @property CloudWatchOutputConfig|null $CloudWatchOutputConfig
 */
class CommandInvocation extends Shape
{
    /**
     * @param array{
     *     CommandId?: string|null,
     *     InstanceId?: string|null,
     *     InstanceName?: string|null,
     *     Comment?: string|null,
     *     DocumentName?: string|null,
     *     DocumentVersion?: string|null,
     *     RequestedDateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Pending'|'InProgress'|'Delayed'|'Success'|'Cancelled'|'TimedOut'|'Failed'|'Cancelling'|null,
     *     StatusDetails?: string|null,
     *     TraceOutput?: string|null,
     *     StandardOutputUrl?: string|null,
     *     StandardErrorUrl?: string|null,
     *     CommandPlugins?: list<CommandPlugin>|null,
     *     ServiceRole?: string|null,
     *     NotificationConfig?: NotificationConfig|null,
     *     CloudWatchOutputConfig?: CloudWatchOutputConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

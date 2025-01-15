<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CommandId
 * @property string|null $DocumentName
 * @property string|null $DocumentVersion
 * @property string|null $Comment
 * @property \Aws\Api\DateTimeResult|null $ExpiresAfter
 * @property array<string, list<string>>|null $Parameters
 * @property list<string>|null $InstanceIds
 * @property list<Target>|null $Targets
 * @property \Aws\Api\DateTimeResult|null $RequestedDateTime
 * @property 'Pending'|'InProgress'|'Success'|'Cancelled'|'Failed'|'TimedOut'|'Cancelling'|null $Status
 * @property string|null $StatusDetails
 * @property string|null $OutputS3Region
 * @property string|null $OutputS3BucketName
 * @property string|null $OutputS3KeyPrefix
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property int|null $TargetCount
 * @property int|null $CompletedCount
 * @property int|null $ErrorCount
 * @property int|null $DeliveryTimedOutCount
 * @property string|null $ServiceRole
 * @property NotificationConfig|null $NotificationConfig
 * @property CloudWatchOutputConfig|null $CloudWatchOutputConfig
 * @property int<30, 2592000>|null $TimeoutSeconds
 * @property AlarmConfiguration|null $AlarmConfiguration
 * @property list<AlarmStateInformation>|null $TriggeredAlarms
 */
class Command extends Shape
{
    /**
     * @param array{
     *     CommandId?: string|null,
     *     DocumentName?: string|null,
     *     DocumentVersion?: string|null,
     *     Comment?: string|null,
     *     ExpiresAfter?: \Aws\Api\DateTimeResult|null,
     *     Parameters?: array<string, list<string>>|null,
     *     InstanceIds?: list<string>|null,
     *     Targets?: list<Target>|null,
     *     RequestedDateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Pending'|'InProgress'|'Success'|'Cancelled'|'Failed'|'TimedOut'|'Cancelling'|null,
     *     StatusDetails?: string|null,
     *     OutputS3Region?: string|null,
     *     OutputS3BucketName?: string|null,
     *     OutputS3KeyPrefix?: string|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     TargetCount?: int|null,
     *     CompletedCount?: int|null,
     *     ErrorCount?: int|null,
     *     DeliveryTimedOutCount?: int|null,
     *     ServiceRole?: string|null,
     *     NotificationConfig?: NotificationConfig|null,
     *     CloudWatchOutputConfig?: CloudWatchOutputConfig|null,
     *     TimeoutSeconds?: int<30, 2592000>|null,
     *     AlarmConfiguration?: AlarmConfiguration|null,
     *     TriggeredAlarms?: list<AlarmStateInformation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommandId
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property string $Comment
 * @property \Aws\Api\DateTimeResult $ExpiresAfter
 * @property array<string, list<string>> $Parameters
 * @property list<string> $InstanceIds
 * @property list<Target> $Targets
 * @property \Aws\Api\DateTimeResult $RequestedDateTime
 * @property 'Pending'|'InProgress'|'Success'|'Cancelled'|'Failed'|'TimedOut'|'Cancelling' $Status
 * @property string $StatusDetails
 * @property string $OutputS3Region
 * @property string $OutputS3BucketName
 * @property string $OutputS3KeyPrefix
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property int $TargetCount
 * @property int $CompletedCount
 * @property int $ErrorCount
 * @property int $DeliveryTimedOutCount
 * @property string $ServiceRole
 * @property NotificationConfig $NotificationConfig
 * @property CloudWatchOutputConfig $CloudWatchOutputConfig
 * @property int<30, 2592000> $TimeoutSeconds
 * @property AlarmConfiguration $AlarmConfiguration
 * @property list<AlarmStateInformation> $TriggeredAlarms
 */
class Command extends Shape
{
    /**
     * @param array{
     *     CommandId?: string,
     *     DocumentName?: string,
     *     DocumentVersion?: string,
     *     Comment?: string,
     *     ExpiresAfter?: \Aws\Api\DateTimeResult,
     *     Parameters?: array<string, list<string>>,
     *     InstanceIds?: list<string>,
     *     Targets?: list<Target>,
     *     RequestedDateTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'Pending'|'InProgress'|'Success'|'Cancelled'|'Failed'|'TimedOut'|'Cancelling',
     *     StatusDetails?: string,
     *     OutputS3Region?: string,
     *     OutputS3BucketName?: string,
     *     OutputS3KeyPrefix?: string,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     TargetCount?: int,
     *     CompletedCount?: int,
     *     ErrorCount?: int,
     *     DeliveryTimedOutCount?: int,
     *     ServiceRole?: string,
     *     NotificationConfig?: NotificationConfig,
     *     CloudWatchOutputConfig?: CloudWatchOutputConfig,
     *     TimeoutSeconds?: int<30, 2592000>,
     *     AlarmConfiguration?: AlarmConfiguration,
     *     TriggeredAlarms?: list<AlarmStateInformation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

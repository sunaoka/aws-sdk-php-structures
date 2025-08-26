<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccelerationSettings|null $AccelerationSettings
 * @property 'NOT_APPLICABLE'|'IN_PROGRESS'|'ACCELERATED'|'NOT_ACCELERATED'|null $AccelerationStatus
 * @property string|null $Arn
 * @property 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB'|null $BillingTagsSource
 * @property string|null $ClientRequestToken
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PROBING'|'TRANSCODING'|'UPLOADING'|null $CurrentPhase
 * @property int|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property list<HopDestination>|null $HopDestinations
 * @property string|null $Id
 * @property string|null $JobEngineVersionRequested
 * @property string|null $JobEngineVersionUsed
 * @property int|null $JobPercentComplete
 * @property string|null $JobTemplate
 * @property string|null $LastShareDetails
 * @property JobMessages|null $Messages
 * @property list<OutputGroupDetail>|null $OutputGroupDetails
 * @property int<-50, 50>|null $Priority
 * @property string|null $Queue
 * @property list<QueueTransition>|null $QueueTransitions
 * @property int|null $RetryCount
 * @property string $Role
 * @property JobSettings $Settings
 * @property 'NOT_SHARED'|'INITIATED'|'SHARED'|null $ShareStatus
 * @property 'DISABLED'|'ENABLED'|null $SimulateReservedQueue
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR'|null $Status
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null $StatusUpdateInterval
 * @property Timing|null $Timing
 * @property array<string, string>|null $UserMetadata
 * @property list<WarningGroup>|null $Warnings
 */
class Job extends Shape
{
    /**
     * @param array{
     *     AccelerationSettings?: AccelerationSettings|null,
     *     AccelerationStatus?: 'NOT_APPLICABLE'|'IN_PROGRESS'|'ACCELERATED'|'NOT_ACCELERATED'|null,
     *     Arn?: string|null,
     *     BillingTagsSource?: 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB'|null,
     *     ClientRequestToken?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CurrentPhase?: 'PROBING'|'TRANSCODING'|'UPLOADING'|null,
     *     ErrorCode?: int|null,
     *     ErrorMessage?: string|null,
     *     HopDestinations?: list<HopDestination>|null,
     *     Id?: string|null,
     *     JobEngineVersionRequested?: string|null,
     *     JobEngineVersionUsed?: string|null,
     *     JobPercentComplete?: int|null,
     *     JobTemplate?: string|null,
     *     LastShareDetails?: string|null,
     *     Messages?: JobMessages|null,
     *     OutputGroupDetails?: list<OutputGroupDetail>|null,
     *     Priority?: int<-50, 50>|null,
     *     Queue?: string|null,
     *     QueueTransitions?: list<QueueTransition>|null,
     *     RetryCount?: int|null,
     *     Role: string,
     *     Settings: JobSettings,
     *     ShareStatus?: 'NOT_SHARED'|'INITIATED'|'SHARED'|null,
     *     SimulateReservedQueue?: 'DISABLED'|'ENABLED'|null,
     *     Status?: 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR'|null,
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null,
     *     Timing?: Timing|null,
     *     UserMetadata?: array<string, string>|null,
     *     Warnings?: list<WarningGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

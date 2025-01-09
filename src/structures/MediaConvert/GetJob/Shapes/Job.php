<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccelerationSettings $AccelerationSettings
 * @property 'NOT_APPLICABLE'|'IN_PROGRESS'|'ACCELERATED'|'NOT_ACCELERATED' $AccelerationStatus
 * @property string $Arn
 * @property 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB' $BillingTagsSource
 * @property string $ClientRequestToken
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PROBING'|'TRANSCODING'|'UPLOADING' $CurrentPhase
 * @property int $ErrorCode
 * @property string $ErrorMessage
 * @property list<HopDestination> $HopDestinations
 * @property string $Id
 * @property string $JobEngineVersionRequested
 * @property string $JobEngineVersionUsed
 * @property int $JobPercentComplete
 * @property string $JobTemplate
 * @property JobMessages $Messages
 * @property list<OutputGroupDetail> $OutputGroupDetails
 * @property int<-50, 50> $Priority
 * @property string $Queue
 * @property list<QueueTransition> $QueueTransitions
 * @property int $RetryCount
 * @property string $Role
 * @property JobSettings $Settings
 * @property 'DISABLED'|'ENABLED' $SimulateReservedQueue
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR' $Status
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600' $StatusUpdateInterval
 * @property Timing $Timing
 * @property array<string, string> $UserMetadata
 * @property list<WarningGroup> $Warnings
 */
class Job extends Shape
{
    /**
     * @param array{
     *     AccelerationSettings?: AccelerationSettings,
     *     AccelerationStatus?: 'NOT_APPLICABLE'|'IN_PROGRESS'|'ACCELERATED'|'NOT_ACCELERATED',
     *     Arn?: string,
     *     BillingTagsSource?: 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB',
     *     ClientRequestToken?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     CurrentPhase?: 'PROBING'|'TRANSCODING'|'UPLOADING',
     *     ErrorCode?: int,
     *     ErrorMessage?: string,
     *     HopDestinations?: list<HopDestination>,
     *     Id?: string,
     *     JobEngineVersionRequested?: string,
     *     JobEngineVersionUsed?: string,
     *     JobPercentComplete?: int,
     *     JobTemplate?: string,
     *     Messages?: JobMessages,
     *     OutputGroupDetails?: list<OutputGroupDetail>,
     *     Priority?: int<-50, 50>,
     *     Queue?: string,
     *     QueueTransitions?: list<QueueTransition>,
     *     RetryCount?: int,
     *     Role: string,
     *     Settings: JobSettings,
     *     SimulateReservedQueue?: 'DISABLED'|'ENABLED',
     *     Status?: 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR',
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600',
     *     Timing?: Timing,
     *     UserMetadata?: array<string, string>,
     *     Warnings?: list<WarningGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

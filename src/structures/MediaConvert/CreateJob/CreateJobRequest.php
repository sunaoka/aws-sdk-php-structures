<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccelerationSettings|null $AccelerationSettings
 * @property 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB'|null $BillingTagsSource
 * @property string|null $ClientRequestToken
 * @property list<Shapes\HopDestination>|null $HopDestinations
 * @property string|null $JobEngineVersion
 * @property string|null $JobTemplate
 * @property int<-50, 50>|null $Priority
 * @property string|null $Queue
 * @property string $Role
 * @property Shapes\JobSettings $Settings
 * @property 'DISABLED'|'ENABLED'|null $SimulateReservedQueue
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null $StatusUpdateInterval
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $UserMetadata
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     AccelerationSettings?: Shapes\AccelerationSettings|null,
     *     BillingTagsSource?: 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB'|null,
     *     ClientRequestToken?: string|null,
     *     HopDestinations?: list<Shapes\HopDestination>|null,
     *     JobEngineVersion?: string|null,
     *     JobTemplate?: string|null,
     *     Priority?: int<-50, 50>|null,
     *     Queue?: string|null,
     *     Role: string,
     *     Settings: Shapes\JobSettings,
     *     SimulateReservedQueue?: 'DISABLED'|'ENABLED'|null,
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null,
     *     Tags?: array<string, string>|null,
     *     UserMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

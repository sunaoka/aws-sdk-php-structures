<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccelerationSettings $AccelerationSettings
 * @property 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB' $BillingTagsSource
 * @property string $ClientRequestToken
 * @property list<Shapes\HopDestination> $HopDestinations
 * @property string $JobEngineVersion
 * @property string $JobTemplate
 * @property int $Priority
 * @property string $Queue
 * @property string $Role
 * @property Shapes\JobSettings $Settings
 * @property 'DISABLED'|'ENABLED' $SimulateReservedQueue
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600' $StatusUpdateInterval
 * @property array<string, string> $Tags
 * @property array<string, string> $UserMetadata
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     AccelerationSettings?: Shapes\AccelerationSettings,
     *     BillingTagsSource?: 'QUEUE'|'PRESET'|'JOB_TEMPLATE'|'JOB',
     *     ClientRequestToken?: string,
     *     HopDestinations?: list<Shapes\HopDestination>,
     *     JobEngineVersion?: string,
     *     JobTemplate?: string,
     *     Priority?: int,
     *     Queue?: string,
     *     Role: string,
     *     Settings: Shapes\JobSettings,
     *     SimulateReservedQueue?: 'DISABLED'|'ENABLED',
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600',
     *     Tags?: array<string, string>,
     *     UserMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

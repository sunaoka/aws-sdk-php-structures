<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccelerationSettings|null $AccelerationSettings
 * @property string|null $Category
 * @property string|null $Description
 * @property list<Shapes\HopDestination>|null $HopDestinations
 * @property string $Name
 * @property int<-50, 50>|null $Priority
 * @property string|null $Queue
 * @property Shapes\JobTemplateSettings $Settings
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null $StatusUpdateInterval
 * @property array<string, string>|null $Tags
 */
class CreateJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     AccelerationSettings?: Shapes\AccelerationSettings|null,
     *     Category?: string|null,
     *     Description?: string|null,
     *     HopDestinations?: list<Shapes\HopDestination>|null,
     *     Name: string,
     *     Priority?: int<-50, 50>|null,
     *     Queue?: string|null,
     *     Settings: Shapes\JobTemplateSettings,
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

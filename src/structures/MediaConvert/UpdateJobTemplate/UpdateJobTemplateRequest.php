<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccelerationSettings $AccelerationSettings
 * @property string $Category
 * @property string $Description
 * @property list<Shapes\HopDestination> $HopDestinations
 * @property string $Name
 * @property int $Priority
 * @property string $Queue
 * @property Shapes\JobTemplateSettings $Settings
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600' $StatusUpdateInterval
 */
class UpdateJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     AccelerationSettings?: Shapes\AccelerationSettings,
     *     Category?: string,
     *     Description?: string,
     *     HopDestinations?: list<Shapes\HopDestination>,
     *     Name: string,
     *     Priority?: int,
     *     Queue?: string,
     *     Settings?: Shapes\JobTemplateSettings,
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

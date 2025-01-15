<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccelerationSettings|null $AccelerationSettings
 * @property string|null $Arn
 * @property string|null $Category
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property list<HopDestination>|null $HopDestinations
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string $Name
 * @property int<-50, 50>|null $Priority
 * @property string|null $Queue
 * @property JobTemplateSettings $Settings
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null $StatusUpdateInterval
 * @property 'SYSTEM'|'CUSTOM'|null $Type
 */
class JobTemplate extends Shape
{
    /**
     * @param array{
     *     AccelerationSettings?: AccelerationSettings|null,
     *     Arn?: string|null,
     *     Category?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     HopDestinations?: list<HopDestination>|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     Priority?: int<-50, 50>|null,
     *     Queue?: string|null,
     *     Settings: JobTemplateSettings,
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600'|null,
     *     Type?: 'SYSTEM'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

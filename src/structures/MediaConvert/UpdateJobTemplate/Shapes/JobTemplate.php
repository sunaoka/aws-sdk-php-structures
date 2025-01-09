<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccelerationSettings $AccelerationSettings
 * @property string $Arn
 * @property string $Category
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property list<HopDestination> $HopDestinations
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $Name
 * @property int<-50, 50> $Priority
 * @property string $Queue
 * @property JobTemplateSettings $Settings
 * @property 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600' $StatusUpdateInterval
 * @property 'SYSTEM'|'CUSTOM' $Type
 */
class JobTemplate extends Shape
{
    /**
     * @param array{
     *     AccelerationSettings?: AccelerationSettings,
     *     Arn?: string,
     *     Category?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     HopDestinations?: list<HopDestination>,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     Priority?: int<-50, 50>,
     *     Queue?: string,
     *     Settings: JobTemplateSettings,
     *     StatusUpdateInterval?: 'SECONDS_10'|'SECONDS_12'|'SECONDS_15'|'SECONDS_20'|'SECONDS_30'|'SECONDS_60'|'SECONDS_120'|'SECONDS_180'|'SECONDS_240'|'SECONDS_300'|'SECONDS_360'|'SECONDS_420'|'SECONDS_480'|'SECONDS_540'|'SECONDS_600',
     *     Type?: 'SYSTEM'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

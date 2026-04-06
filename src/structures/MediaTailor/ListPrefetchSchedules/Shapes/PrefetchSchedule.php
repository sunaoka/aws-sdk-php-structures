<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property PrefetchConsumption|null $Consumption
 * @property string $Name
 * @property string $PlaybackConfigurationName
 * @property PrefetchRetrieval|null $Retrieval
 * @property 'SINGLE'|'RECURRING'|null $ScheduleType
 * @property RecurringPrefetchConfiguration|null $RecurringPrefetchConfiguration
 * @property string|null $StreamId
 */
class PrefetchSchedule extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Consumption?: PrefetchConsumption|null,
     *     Name: string,
     *     PlaybackConfigurationName: string,
     *     Retrieval?: PrefetchRetrieval|null,
     *     ScheduleType?: 'SINGLE'|'RECURRING'|null,
     *     RecurringPrefetchConfiguration?: RecurringPrefetchConfiguration|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

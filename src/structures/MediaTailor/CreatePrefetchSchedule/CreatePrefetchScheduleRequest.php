<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PrefetchConsumption|null $Consumption
 * @property string $Name
 * @property string $PlaybackConfigurationName
 * @property Shapes\PrefetchRetrieval|null $Retrieval
 * @property Shapes\RecurringPrefetchConfiguration|null $RecurringPrefetchConfiguration
 * @property 'SINGLE'|'RECURRING'|null $ScheduleType
 * @property string|null $StreamId
 */
class CreatePrefetchScheduleRequest extends Request
{
    /**
     * @param array{
     *     Consumption?: Shapes\PrefetchConsumption|null,
     *     Name: string,
     *     PlaybackConfigurationName: string,
     *     Retrieval?: Shapes\PrefetchRetrieval|null,
     *     RecurringPrefetchConfiguration?: Shapes\RecurringPrefetchConfiguration|null,
     *     ScheduleType?: 'SINGLE'|'RECURRING'|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

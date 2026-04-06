<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PrefetchConsumption $Consumption
 * @property string $Name
 * @property string $PlaybackConfigurationName
 * @property Shapes\PrefetchRetrieval $Retrieval
 * @property string|null $StreamId
 */
class CreatePrefetchScheduleRequest extends Request
{
    /**
     * @param array{
     *     Consumption: Shapes\PrefetchConsumption,
     *     Name: string,
     *     PlaybackConfigurationName: string,
     *     Retrieval: Shapes\PrefetchRetrieval,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

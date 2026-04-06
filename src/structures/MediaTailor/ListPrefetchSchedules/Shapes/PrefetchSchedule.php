<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property PrefetchConsumption $Consumption
 * @property string $Name
 * @property string $PlaybackConfigurationName
 * @property PrefetchRetrieval $Retrieval
 * @property string|null $StreamId
 */
class PrefetchSchedule extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Consumption: PrefetchConsumption,
     *     Name: string,
     *     PlaybackConfigurationName: string,
     *     Retrieval: PrefetchRetrieval,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

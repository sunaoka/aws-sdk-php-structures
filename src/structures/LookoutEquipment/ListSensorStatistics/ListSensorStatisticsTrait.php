<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics;

trait ListSensorStatisticsTrait
{
    /**
     * @param ListSensorStatisticsRequest $args
     * @return ListSensorStatisticsResponse
     */
    public function listSensorStatistics(ListSensorStatisticsRequest $args)
    {
        $result = parent::listSensorStatistics($args->toArray());
        return new ListSensorStatisticsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\StopColumnStatisticsTaskRunSchedule;

trait StopColumnStatisticsTaskRunScheduleTrait
{
    /**
     * @param StopColumnStatisticsTaskRunScheduleRequest $args
     * @return StopColumnStatisticsTaskRunScheduleResponse
     */
    public function stopColumnStatisticsTaskRunSchedule(StopColumnStatisticsTaskRunScheduleRequest $args)
    {
        $result = parent::stopColumnStatisticsTaskRunSchedule($args->toArray());
        return new StopColumnStatisticsTaskRunScheduleResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\StartColumnStatisticsTaskRunSchedule;

trait StartColumnStatisticsTaskRunScheduleTrait
{
    /**
     * @param StartColumnStatisticsTaskRunScheduleRequest $args
     * @return StartColumnStatisticsTaskRunScheduleResponse
     */
    public function startColumnStatisticsTaskRunSchedule(StartColumnStatisticsTaskRunScheduleRequest $args)
    {
        $result = parent::startColumnStatisticsTaskRunSchedule($args->toArray());
        return new StartColumnStatisticsTaskRunScheduleResponse($result->toArray());
    }
}

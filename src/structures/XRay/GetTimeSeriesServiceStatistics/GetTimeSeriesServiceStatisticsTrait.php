<?php

namespace Sunaoka\Aws\Structures\XRay\GetTimeSeriesServiceStatistics;

trait GetTimeSeriesServiceStatisticsTrait
{
    /**
     * @param GetTimeSeriesServiceStatisticsRequest $args
     * @return GetTimeSeriesServiceStatisticsResponse
     */
    public function getTimeSeriesServiceStatistics(GetTimeSeriesServiceStatisticsRequest $args)
    {
        $result = parent::getTimeSeriesServiceStatistics($args->toArray());
        return new GetTimeSeriesServiceStatisticsResponse($result->toArray());
    }
}

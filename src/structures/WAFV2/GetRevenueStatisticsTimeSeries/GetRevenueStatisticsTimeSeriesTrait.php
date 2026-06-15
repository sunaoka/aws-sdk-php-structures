<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatisticsTimeSeries;

trait GetRevenueStatisticsTimeSeriesTrait
{
    /**
     * @param GetRevenueStatisticsTimeSeriesRequest $args
     * @return GetRevenueStatisticsTimeSeriesResponse
     */
    public function getRevenueStatisticsTimeSeries(GetRevenueStatisticsTimeSeriesRequest $args)
    {
        $result = parent::getRevenueStatisticsTimeSeries($args->toArray());
        return new GetRevenueStatisticsTimeSeriesResponse($result->toArray());
    }
}

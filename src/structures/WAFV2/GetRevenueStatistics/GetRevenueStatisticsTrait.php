<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatistics;

trait GetRevenueStatisticsTrait
{
    /**
     * @param GetRevenueStatisticsRequest $args
     * @return GetRevenueStatisticsResponse
     */
    public function getRevenueStatistics(GetRevenueStatisticsRequest $args)
    {
        $result = parent::getRevenueStatistics($args->toArray());
        return new GetRevenueStatisticsResponse($result->toArray());
    }
}

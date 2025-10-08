<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStatistics;

trait GetMetricStatisticsTrait
{
    /**
     * @param GetMetricStatisticsRequest $args
     * @return GetMetricStatisticsResponse
     */
    public function getMetricStatistics(GetMetricStatisticsRequest $args)
    {
        $result = parent::getMetricStatistics($args->toArray());
        return new GetMetricStatisticsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStatistics;

trait GetPropertygraphStatisticsTrait
{
    /**
     * @return GetPropertygraphStatisticsResponse
     */
    public function getPropertygraphStatistics()
    {
        $result = parent::getPropertygraphStatistics();
        return new GetPropertygraphStatisticsResponse($result->toArray());
    }
}

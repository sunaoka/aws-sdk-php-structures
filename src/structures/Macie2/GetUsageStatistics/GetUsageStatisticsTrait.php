<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics;

trait GetUsageStatisticsTrait
{
    /**
     * @param GetUsageStatisticsRequest $args
     * @return GetUsageStatisticsResponse
     */
    public function getUsageStatistics(GetUsageStatisticsRequest $args)
    {
        $result = parent::getUsageStatistics($args->toArray());
        return new GetUsageStatisticsResponse($result->toArray());
    }
}

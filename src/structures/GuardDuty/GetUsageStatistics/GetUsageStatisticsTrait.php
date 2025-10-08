<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics;

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

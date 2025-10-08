<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCoverageStatistics;

trait GetCoverageStatisticsTrait
{
    /**
     * @param GetCoverageStatisticsRequest $args
     * @return GetCoverageStatisticsResponse
     */
    public function getCoverageStatistics(GetCoverageStatisticsRequest $args)
    {
        $result = parent::getCoverageStatistics($args->toArray());
        return new GetCoverageStatisticsResponse($result->toArray());
    }
}

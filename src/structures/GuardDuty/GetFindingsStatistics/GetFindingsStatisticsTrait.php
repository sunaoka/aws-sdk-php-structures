<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics;

trait GetFindingsStatisticsTrait
{
    /**
     * @param GetFindingsStatisticsRequest $args
     * @return GetFindingsStatisticsResponse
     */
    public function getFindingsStatistics(GetFindingsStatisticsRequest $args)
    {
        $result = parent::getFindingsStatistics($args->toArray());
        return new GetFindingsStatisticsResponse($result->toArray());
    }
}

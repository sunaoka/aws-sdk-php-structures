<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics;

trait GetFindingStatisticsTrait
{
    /**
     * @param GetFindingStatisticsRequest $args
     * @return GetFindingStatisticsResponse
     */
    public function getFindingStatistics(GetFindingStatisticsRequest $args)
    {
        $result = parent::getFindingStatistics($args->toArray());
        return new GetFindingStatisticsResponse($result->toArray());
    }
}

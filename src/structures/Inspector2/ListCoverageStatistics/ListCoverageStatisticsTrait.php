<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics;

trait ListCoverageStatisticsTrait
{
    /**
     * @param ListCoverageStatisticsRequest $args
     * @return ListCoverageStatisticsResponse
     */
    public function listCoverageStatistics(ListCoverageStatisticsRequest $args)
    {
        $result = parent::listCoverageStatistics($args->toArray());
        return new ListCoverageStatisticsResponse($result->toArray());
    }
}

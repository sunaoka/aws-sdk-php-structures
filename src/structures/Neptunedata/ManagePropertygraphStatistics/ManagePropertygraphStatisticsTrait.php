<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ManagePropertygraphStatistics;

trait ManagePropertygraphStatisticsTrait
{
    /**
     * @param ManagePropertygraphStatisticsRequest $args
     * @return ManagePropertygraphStatisticsResponse
     */
    public function managePropertygraphStatistics(ManagePropertygraphStatisticsRequest $args)
    {
        $result = parent::managePropertygraphStatistics($args->toArray());
        return new ManagePropertygraphStatisticsResponse($result->toArray());
    }
}

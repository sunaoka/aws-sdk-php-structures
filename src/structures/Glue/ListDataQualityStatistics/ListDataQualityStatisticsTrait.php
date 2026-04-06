<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics;

trait ListDataQualityStatisticsTrait
{
    /**
     * @param ListDataQualityStatisticsRequest $args
     * @return ListDataQualityStatisticsResponse
     */
    public function listDataQualityStatistics(ListDataQualityStatisticsRequest $args)
    {
        $result = parent::listDataQualityStatistics($args->toArray());
        return new ListDataQualityStatisticsResponse($result->toArray());
    }
}

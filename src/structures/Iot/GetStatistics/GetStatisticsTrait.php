<?php

namespace Sunaoka\Aws\Structures\Iot\GetStatistics;

trait GetStatisticsTrait
{
    /**
     * @param GetStatisticsRequest $args
     * @return GetStatisticsResponse
     */
    public function getStatistics(GetStatisticsRequest $args)
    {
        $result = parent::getStatistics($args->toArray());
        return new GetStatisticsResponse($result->toArray());
    }
}

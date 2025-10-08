<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics;

trait GetQueryRuntimeStatisticsTrait
{
    /**
     * @param GetQueryRuntimeStatisticsRequest $args
     * @return GetQueryRuntimeStatisticsResponse
     */
    public function getQueryRuntimeStatistics(GetQueryRuntimeStatisticsRequest $args)
    {
        $result = parent::getQueryRuntimeStatistics($args->toArray());
        return new GetQueryRuntimeStatisticsResponse($result->toArray());
    }
}

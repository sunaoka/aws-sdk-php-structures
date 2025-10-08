<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics;

trait GetQueryStatisticsTrait
{
    /**
     * @param GetQueryStatisticsRequest $args
     * @return GetQueryStatisticsResponse
     */
    public function getQueryStatistics(GetQueryStatisticsRequest $args)
    {
        $result = parent::getQueryStatistics($args->toArray());
        return new GetQueryStatisticsResponse($result->toArray());
    }
}

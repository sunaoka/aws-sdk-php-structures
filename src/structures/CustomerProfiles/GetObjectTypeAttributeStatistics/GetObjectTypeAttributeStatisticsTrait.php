<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetObjectTypeAttributeStatistics;

trait GetObjectTypeAttributeStatisticsTrait
{
    /**
     * @param GetObjectTypeAttributeStatisticsRequest $args
     * @return GetObjectTypeAttributeStatisticsResponse
     */
    public function getObjectTypeAttributeStatistics(GetObjectTypeAttributeStatisticsRequest $args)
    {
        $result = parent::getObjectTypeAttributeStatistics($args->toArray());
        return new GetObjectTypeAttributeStatisticsResponse($result->toArray());
    }
}

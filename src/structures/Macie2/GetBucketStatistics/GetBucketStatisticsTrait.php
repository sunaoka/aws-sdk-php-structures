<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics;

trait GetBucketStatisticsTrait
{
    /**
     * @param GetBucketStatisticsRequest $args
     * @return GetBucketStatisticsResponse
     */
    public function getBucketStatistics(GetBucketStatisticsRequest $args)
    {
        $result = parent::getBucketStatistics($args->toArray());
        return new GetBucketStatisticsResponse($result->toArray());
    }
}

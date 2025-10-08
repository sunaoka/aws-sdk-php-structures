<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketMetricData;

trait GetBucketMetricDataTrait
{
    /**
     * @param GetBucketMetricDataRequest $args
     * @return GetBucketMetricDataResponse
     */
    public function getBucketMetricData(GetBucketMetricDataRequest $args)
    {
        $result = parent::getBucketMetricData($args->toArray());
        return new GetBucketMetricDataResponse($result->toArray());
    }
}

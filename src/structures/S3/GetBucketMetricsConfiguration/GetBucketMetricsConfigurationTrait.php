<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetricsConfiguration;

trait GetBucketMetricsConfigurationTrait
{
    /**
     * @param GetBucketMetricsConfigurationRequest $args
     * @return GetBucketMetricsConfigurationResponse
     */
    public function getBucketMetricsConfiguration(GetBucketMetricsConfigurationRequest $args)
    {
        $result = parent::getBucketMetricsConfiguration($args->toArray());
        return new GetBucketMetricsConfigurationResponse($result->toArray());
    }
}

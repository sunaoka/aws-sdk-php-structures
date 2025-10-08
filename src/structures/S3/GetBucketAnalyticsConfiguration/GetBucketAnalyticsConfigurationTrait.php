<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAnalyticsConfiguration;

trait GetBucketAnalyticsConfigurationTrait
{
    /**
     * @param GetBucketAnalyticsConfigurationRequest $args
     * @return GetBucketAnalyticsConfigurationResponse
     */
    public function getBucketAnalyticsConfiguration(GetBucketAnalyticsConfigurationRequest $args)
    {
        $result = parent::getBucketAnalyticsConfiguration($args->toArray());
        return new GetBucketAnalyticsConfigurationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketAnalyticsConfiguration;

trait DeleteBucketAnalyticsConfigurationTrait
{
    /**
     * @param DeleteBucketAnalyticsConfigurationRequest $args
     * @return void
     */
    public function deleteBucketAnalyticsConfiguration(DeleteBucketAnalyticsConfigurationRequest $args)
    {
        parent::deleteBucketAnalyticsConfiguration($args->toArray());
    }
}

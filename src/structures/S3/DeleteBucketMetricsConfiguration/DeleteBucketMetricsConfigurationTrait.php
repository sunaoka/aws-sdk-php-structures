<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketMetricsConfiguration;

trait DeleteBucketMetricsConfigurationTrait
{
    /**
     * @param DeleteBucketMetricsConfigurationRequest $args
     * @return void
     */
    public function deleteBucketMetricsConfiguration(DeleteBucketMetricsConfigurationRequest $args)
    {
        parent::deleteBucketMetricsConfiguration($args->toArray());
    }
}

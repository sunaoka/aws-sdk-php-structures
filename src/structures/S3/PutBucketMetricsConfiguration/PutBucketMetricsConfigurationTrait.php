<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketMetricsConfiguration;

trait PutBucketMetricsConfigurationTrait
{
    /**
     * @param PutBucketMetricsConfigurationRequest $args
     * @return void
     */
    public function putBucketMetricsConfiguration(PutBucketMetricsConfigurationRequest $args)
    {
        parent::putBucketMetricsConfiguration($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration;

trait PutBucketAnalyticsConfigurationTrait
{
    /**
     * @param PutBucketAnalyticsConfigurationRequest $args
     * @return void
     */
    public function putBucketAnalyticsConfiguration(PutBucketAnalyticsConfigurationRequest $args)
    {
        parent::putBucketAnalyticsConfiguration($args->toArray());
    }
}

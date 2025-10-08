<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration;

trait PutBucketNotificationConfigurationTrait
{
    /**
     * @param PutBucketNotificationConfigurationRequest $args
     * @return void
     */
    public function putBucketNotificationConfiguration(PutBucketNotificationConfigurationRequest $args)
    {
        parent::putBucketNotificationConfiguration($args->toArray());
    }
}

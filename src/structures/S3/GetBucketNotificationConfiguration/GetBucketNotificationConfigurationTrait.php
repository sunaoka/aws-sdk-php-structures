<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotificationConfiguration;

trait GetBucketNotificationConfigurationTrait
{
    /**
     * @param GetBucketNotificationConfigurationRequest $args
     * @return GetBucketNotificationConfigurationResponse
     */
    public function getBucketNotificationConfiguration(GetBucketNotificationConfigurationRequest $args)
    {
        $result = parent::getBucketNotificationConfiguration($args->toArray());
        return new GetBucketNotificationConfigurationResponse($result->toArray());
    }
}

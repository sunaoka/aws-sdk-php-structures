<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotification;

trait GetBucketNotificationTrait
{
    /**
     * @param GetBucketNotificationRequest $args
     * @return GetBucketNotificationResponse
     */
    public function getBucketNotification(GetBucketNotificationRequest $args)
    {
        $result = parent::getBucketNotification($args->toArray());
        return new GetBucketNotificationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotification;

trait PutBucketNotificationTrait
{
    /**
     * @param PutBucketNotificationRequest $args
     * @return void
     */
    public function putBucketNotification(PutBucketNotificationRequest $args)
    {
        parent::putBucketNotification($args->toArray());
    }
}

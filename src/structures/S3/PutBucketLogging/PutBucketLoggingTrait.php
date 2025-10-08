<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging;

trait PutBucketLoggingTrait
{
    /**
     * @param PutBucketLoggingRequest $args
     * @return void
     */
    public function putBucketLogging(PutBucketLoggingRequest $args)
    {
        parent::putBucketLogging($args->toArray());
    }
}

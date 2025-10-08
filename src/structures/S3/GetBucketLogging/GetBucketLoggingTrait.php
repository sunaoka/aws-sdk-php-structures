<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLogging;

trait GetBucketLoggingTrait
{
    /**
     * @param GetBucketLoggingRequest $args
     * @return GetBucketLoggingResponse
     */
    public function getBucketLogging(GetBucketLoggingRequest $args)
    {
        $result = parent::getBucketLogging($args->toArray());
        return new GetBucketLoggingResponse($result->toArray());
    }
}

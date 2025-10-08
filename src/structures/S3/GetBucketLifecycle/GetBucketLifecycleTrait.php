<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycle;

trait GetBucketLifecycleTrait
{
    /**
     * @param GetBucketLifecycleRequest $args
     * @return GetBucketLifecycleResponse
     */
    public function getBucketLifecycle(GetBucketLifecycleRequest $args)
    {
        $result = parent::getBucketLifecycle($args->toArray());
        return new GetBucketLifecycleResponse($result->toArray());
    }
}

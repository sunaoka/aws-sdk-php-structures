<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketTagging;

trait GetBucketTaggingTrait
{
    /**
     * @param GetBucketTaggingRequest $args
     * @return GetBucketTaggingResponse
     */
    public function getBucketTagging(GetBucketTaggingRequest $args)
    {
        $result = parent::getBucketTagging($args->toArray());
        return new GetBucketTaggingResponse($result->toArray());
    }
}

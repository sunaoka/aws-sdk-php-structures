<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketVersioning;

trait GetBucketVersioningTrait
{
    /**
     * @param GetBucketVersioningRequest $args
     * @return GetBucketVersioningResponse
     */
    public function getBucketVersioning(GetBucketVersioningRequest $args)
    {
        $result = parent::getBucketVersioning($args->toArray());
        return new GetBucketVersioningResponse($result->toArray());
    }
}

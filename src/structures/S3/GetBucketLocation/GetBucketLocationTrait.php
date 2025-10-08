<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLocation;

trait GetBucketLocationTrait
{
    /**
     * @param GetBucketLocationRequest $args
     * @return GetBucketLocationResponse
     */
    public function getBucketLocation(GetBucketLocationRequest $args)
    {
        $result = parent::getBucketLocation($args->toArray());
        return new GetBucketLocationResponse($result->toArray());
    }
}

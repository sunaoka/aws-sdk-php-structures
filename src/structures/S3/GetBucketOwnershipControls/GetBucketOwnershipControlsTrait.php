<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketOwnershipControls;

trait GetBucketOwnershipControlsTrait
{
    /**
     * @param GetBucketOwnershipControlsRequest $args
     * @return GetBucketOwnershipControlsResponse
     */
    public function getBucketOwnershipControls(GetBucketOwnershipControlsRequest $args)
    {
        $result = parent::getBucketOwnershipControls($args->toArray());
        return new GetBucketOwnershipControlsResponse($result->toArray());
    }
}

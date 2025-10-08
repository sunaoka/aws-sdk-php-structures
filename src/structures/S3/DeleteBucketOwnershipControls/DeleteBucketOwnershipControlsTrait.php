<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketOwnershipControls;

trait DeleteBucketOwnershipControlsTrait
{
    /**
     * @param DeleteBucketOwnershipControlsRequest $args
     * @return void
     */
    public function deleteBucketOwnershipControls(DeleteBucketOwnershipControlsRequest $args)
    {
        parent::deleteBucketOwnershipControls($args->toArray());
    }
}

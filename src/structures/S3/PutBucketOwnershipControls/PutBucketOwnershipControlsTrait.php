<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketOwnershipControls;

trait PutBucketOwnershipControlsTrait
{
    /**
     * @param PutBucketOwnershipControlsRequest $args
     * @return void
     */
    public function putBucketOwnershipControls(PutBucketOwnershipControlsRequest $args)
    {
        parent::putBucketOwnershipControls($args->toArray());
    }
}

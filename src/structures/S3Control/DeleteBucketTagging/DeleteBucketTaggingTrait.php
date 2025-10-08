<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteBucketTagging;

trait DeleteBucketTaggingTrait
{
    /**
     * @param DeleteBucketTaggingRequest $args
     * @return void
     */
    public function deleteBucketTagging(DeleteBucketTaggingRequest $args)
    {
        parent::deleteBucketTagging($args->toArray());
    }
}

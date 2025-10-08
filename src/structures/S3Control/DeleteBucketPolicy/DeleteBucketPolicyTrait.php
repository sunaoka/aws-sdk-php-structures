<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteBucketPolicy;

trait DeleteBucketPolicyTrait
{
    /**
     * @param DeleteBucketPolicyRequest $args
     * @return void
     */
    public function deleteBucketPolicy(DeleteBucketPolicyRequest $args)
    {
        parent::deleteBucketPolicy($args->toArray());
    }
}

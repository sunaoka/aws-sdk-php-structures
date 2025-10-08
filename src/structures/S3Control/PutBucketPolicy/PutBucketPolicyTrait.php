<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketPolicy;

trait PutBucketPolicyTrait
{
    /**
     * @param PutBucketPolicyRequest $args
     * @return void
     */
    public function putBucketPolicy(PutBucketPolicyRequest $args)
    {
        parent::putBucketPolicy($args->toArray());
    }
}

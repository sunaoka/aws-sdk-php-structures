<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketPolicy;

trait GetBucketPolicyTrait
{
    /**
     * @param GetBucketPolicyRequest $args
     * @return GetBucketPolicyResponse
     */
    public function getBucketPolicy(GetBucketPolicyRequest $args)
    {
        $result = parent::getBucketPolicy($args->toArray());
        return new GetBucketPolicyResponse($result->toArray());
    }
}

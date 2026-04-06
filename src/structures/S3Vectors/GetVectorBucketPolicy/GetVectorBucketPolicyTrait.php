<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectorBucketPolicy;

trait GetVectorBucketPolicyTrait
{
    /**
     * @param GetVectorBucketPolicyRequest $args
     * @return GetVectorBucketPolicyResponse
     */
    public function getVectorBucketPolicy(GetVectorBucketPolicyRequest $args)
    {
        $result = parent::getVectorBucketPolicy($args->toArray());
        return new GetVectorBucketPolicyResponse($result->toArray());
    }
}

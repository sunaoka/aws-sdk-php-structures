<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectorBucketPolicy;

trait PutVectorBucketPolicyTrait
{
    /**
     * @param PutVectorBucketPolicyRequest $args
     * @return PutVectorBucketPolicyResponse
     */
    public function putVectorBucketPolicy(PutVectorBucketPolicyRequest $args)
    {
        $result = parent::putVectorBucketPolicy($args->toArray());
        return new PutVectorBucketPolicyResponse($result->toArray());
    }
}

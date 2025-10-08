<?php

namespace Sunaoka\Aws\Structures\S3Vectors\DeleteVectorBucketPolicy;

trait DeleteVectorBucketPolicyTrait
{
    /**
     * @param DeleteVectorBucketPolicyRequest $args
     * @return DeleteVectorBucketPolicyResponse
     */
    public function deleteVectorBucketPolicy(DeleteVectorBucketPolicyRequest $args)
    {
        $result = parent::deleteVectorBucketPolicy($args->toArray());
        return new DeleteVectorBucketPolicyResponse($result->toArray());
    }
}

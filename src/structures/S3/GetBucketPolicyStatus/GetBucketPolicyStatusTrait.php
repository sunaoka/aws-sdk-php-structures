<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketPolicyStatus;

trait GetBucketPolicyStatusTrait
{
    /**
     * @param GetBucketPolicyStatusRequest $args
     * @return GetBucketPolicyStatusResponse
     */
    public function getBucketPolicyStatus(GetBucketPolicyStatusRequest $args)
    {
        $result = parent::getBucketPolicyStatus($args->toArray());
        return new GetBucketPolicyStatusResponse($result->toArray());
    }
}

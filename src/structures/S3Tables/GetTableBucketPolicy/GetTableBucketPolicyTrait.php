<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketPolicy;

trait GetTableBucketPolicyTrait
{
    /**
     * @param GetTableBucketPolicyRequest $args
     * @return GetTableBucketPolicyResponse
     */
    public function getTableBucketPolicy(GetTableBucketPolicyRequest $args)
    {
        $result = parent::getTableBucketPolicy($args->toArray());
        return new GetTableBucketPolicyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchGetPolicy;

trait BatchGetPolicyTrait
{
    /**
     * @param BatchGetPolicyRequest $args
     * @return BatchGetPolicyResponse
     */
    public function batchGetPolicy(BatchGetPolicyRequest $args)
    {
        $result = parent::batchGetPolicy($args->toArray());
        return new BatchGetPolicyResponse($result->toArray());
    }
}

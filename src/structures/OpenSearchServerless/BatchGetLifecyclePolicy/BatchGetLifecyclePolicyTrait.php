<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy;

trait BatchGetLifecyclePolicyTrait
{
    /**
     * @param BatchGetLifecyclePolicyRequest $args
     * @return BatchGetLifecyclePolicyResponse
     */
    public function batchGetLifecyclePolicy(BatchGetLifecyclePolicyRequest $args)
    {
        $result = parent::batchGetLifecyclePolicy($args->toArray());
        return new BatchGetLifecyclePolicyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy;

trait BatchGetEffectiveLifecyclePolicyTrait
{
    /**
     * @param BatchGetEffectiveLifecyclePolicyRequest $args
     * @return BatchGetEffectiveLifecyclePolicyResponse
     */
    public function batchGetEffectiveLifecyclePolicy(BatchGetEffectiveLifecyclePolicyRequest $args)
    {
        $result = parent::batchGetEffectiveLifecyclePolicy($args->toArray());
        return new BatchGetEffectiveLifecyclePolicyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy;

trait UpdateLifecyclePolicyTrait
{
    /**
     * @param UpdateLifecyclePolicyRequest $args
     * @return UpdateLifecyclePolicyResponse
     */
    public function updateLifecyclePolicy(UpdateLifecyclePolicyRequest $args)
    {
        $result = parent::updateLifecyclePolicy($args->toArray());
        return new UpdateLifecyclePolicyResponse($result->toArray());
    }
}

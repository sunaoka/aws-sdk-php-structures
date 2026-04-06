<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateLifecyclePolicy;

trait CreateLifecyclePolicyTrait
{
    /**
     * @param CreateLifecyclePolicyRequest $args
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicy(CreateLifecyclePolicyRequest $args)
    {
        $result = parent::createLifecyclePolicy($args->toArray());
        return new CreateLifecyclePolicyResponse($result->toArray());
    }
}

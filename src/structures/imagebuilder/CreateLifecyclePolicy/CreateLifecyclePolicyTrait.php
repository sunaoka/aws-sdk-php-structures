<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy;

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

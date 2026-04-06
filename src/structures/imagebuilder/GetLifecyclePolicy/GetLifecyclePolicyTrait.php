<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy;

trait GetLifecyclePolicyTrait
{
    /**
     * @param GetLifecyclePolicyRequest $args
     * @return GetLifecyclePolicyResponse
     */
    public function getLifecyclePolicy(GetLifecyclePolicyRequest $args)
    {
        $result = parent::getLifecyclePolicy($args->toArray());
        return new GetLifecyclePolicyResponse($result->toArray());
    }
}

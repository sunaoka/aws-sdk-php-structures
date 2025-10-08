<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponentPolicy;

trait GetComponentPolicyTrait
{
    /**
     * @param GetComponentPolicyRequest $args
     * @return GetComponentPolicyResponse
     */
    public function getComponentPolicy(GetComponentPolicyRequest $args)
    {
        $result = parent::getComponentPolicy($args->toArray());
        return new GetComponentPolicyResponse($result->toArray());
    }
}

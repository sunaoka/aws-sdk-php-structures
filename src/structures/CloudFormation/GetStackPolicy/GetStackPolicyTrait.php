<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetStackPolicy;

trait GetStackPolicyTrait
{
    /**
     * @param GetStackPolicyRequest $args
     * @return GetStackPolicyResponse
     */
    public function getStackPolicy(GetStackPolicyRequest $args)
    {
        $result = parent::getStackPolicy($args->toArray());
        return new GetStackPolicyResponse($result->toArray());
    }
}

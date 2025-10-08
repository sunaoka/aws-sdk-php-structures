<?php

namespace Sunaoka\Aws\Structures\Iam\CreatePolicy;

trait CreatePolicyTrait
{
    /**
     * @param CreatePolicyRequest $args
     * @return CreatePolicyResponse
     */
    public function createPolicy(CreatePolicyRequest $args)
    {
        $result = parent::createPolicy($args->toArray());
        return new CreatePolicyResponse($result->toArray());
    }
}

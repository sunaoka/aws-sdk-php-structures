<?php

namespace Sunaoka\Aws\Structures\Ecr\GetRegistryPolicy;

trait GetRegistryPolicyTrait
{
    /**
     * @param GetRegistryPolicyRequest $args
     * @return GetRegistryPolicyResponse
     */
    public function getRegistryPolicy(GetRegistryPolicyRequest $args)
    {
        $result = parent::getRegistryPolicy($args->toArray());
        return new GetRegistryPolicyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\OSIS\GetResourcePolicy;

trait GetResourcePolicyTrait
{
    /**
     * @param GetResourcePolicyRequest $args
     * @return GetResourcePolicyResponse
     */
    public function getResourcePolicy(GetResourcePolicyRequest $args)
    {
        $result = parent::getResourcePolicy($args->toArray());
        return new GetResourcePolicyResponse($result->toArray());
    }
}

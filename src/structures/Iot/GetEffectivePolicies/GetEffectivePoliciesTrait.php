<?php

namespace Sunaoka\Aws\Structures\Iot\GetEffectivePolicies;

trait GetEffectivePoliciesTrait
{
    /**
     * @param GetEffectivePoliciesRequest $args
     * @return GetEffectivePoliciesResponse
     */
    public function getEffectivePolicies(GetEffectivePoliciesRequest $args)
    {
        $result = parent::getEffectivePolicies($args->toArray());
        return new GetEffectivePoliciesResponse($result->toArray());
    }
}

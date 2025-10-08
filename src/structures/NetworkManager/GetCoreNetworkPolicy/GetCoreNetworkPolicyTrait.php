<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkPolicy;

trait GetCoreNetworkPolicyTrait
{
    /**
     * @param GetCoreNetworkPolicyRequest $args
     * @return GetCoreNetworkPolicyResponse
     */
    public function getCoreNetworkPolicy(GetCoreNetworkPolicyRequest $args)
    {
        $result = parent::getCoreNetworkPolicy($args->toArray());
        return new GetCoreNetworkPolicyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutCoreNetworkPolicy;

trait PutCoreNetworkPolicyTrait
{
    /**
     * @param PutCoreNetworkPolicyRequest $args
     * @return PutCoreNetworkPolicyResponse
     */
    public function putCoreNetworkPolicy(PutCoreNetworkPolicyRequest $args)
    {
        $result = parent::putCoreNetworkPolicy($args->toArray());
        return new PutCoreNetworkPolicyResponse($result->toArray());
    }
}

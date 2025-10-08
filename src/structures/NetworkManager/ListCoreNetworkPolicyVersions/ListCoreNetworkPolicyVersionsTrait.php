<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPolicyVersions;

trait ListCoreNetworkPolicyVersionsTrait
{
    /**
     * @param ListCoreNetworkPolicyVersionsRequest $args
     * @return ListCoreNetworkPolicyVersionsResponse
     */
    public function listCoreNetworkPolicyVersions(ListCoreNetworkPolicyVersionsRequest $args)
    {
        $result = parent::listCoreNetworkPolicyVersions($args->toArray());
        return new ListCoreNetworkPolicyVersionsResponse($result->toArray());
    }
}

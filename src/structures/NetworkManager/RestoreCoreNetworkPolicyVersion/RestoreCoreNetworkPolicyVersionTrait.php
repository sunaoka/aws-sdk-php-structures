<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RestoreCoreNetworkPolicyVersion;

trait RestoreCoreNetworkPolicyVersionTrait
{
    /**
     * @param RestoreCoreNetworkPolicyVersionRequest $args
     * @return RestoreCoreNetworkPolicyVersionResponse
     */
    public function restoreCoreNetworkPolicyVersion(RestoreCoreNetworkPolicyVersionRequest $args)
    {
        $result = parent::restoreCoreNetworkPolicyVersion($args->toArray());
        return new RestoreCoreNetworkPolicyVersionResponse($result->toArray());
    }
}

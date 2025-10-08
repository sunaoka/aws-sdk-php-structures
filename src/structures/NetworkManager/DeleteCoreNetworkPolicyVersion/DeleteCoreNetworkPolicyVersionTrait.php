<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetworkPolicyVersion;

trait DeleteCoreNetworkPolicyVersionTrait
{
    /**
     * @param DeleteCoreNetworkPolicyVersionRequest $args
     * @return DeleteCoreNetworkPolicyVersionResponse
     */
    public function deleteCoreNetworkPolicyVersion(DeleteCoreNetworkPolicyVersionRequest $args)
    {
        $result = parent::deleteCoreNetworkPolicyVersion($args->toArray());
        return new DeleteCoreNetworkPolicyVersionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetwork;

trait DeleteCoreNetworkTrait
{
    /**
     * @param DeleteCoreNetworkRequest $args
     * @return DeleteCoreNetworkResponse
     */
    public function deleteCoreNetwork(DeleteCoreNetworkRequest $args)
    {
        $result = parent::deleteCoreNetwork($args->toArray());
        return new DeleteCoreNetworkResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteOdbNetwork;

trait DeleteOdbNetworkTrait
{
    /**
     * @param DeleteOdbNetworkRequest $args
     * @return DeleteOdbNetworkResponse
     */
    public function deleteOdbNetwork(DeleteOdbNetworkRequest $args)
    {
        $result = parent::deleteOdbNetwork($args->toArray());
        return new DeleteOdbNetworkResponse($result->toArray());
    }
}

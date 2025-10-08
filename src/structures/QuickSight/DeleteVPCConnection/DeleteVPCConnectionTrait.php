<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteVPCConnection;

trait DeleteVPCConnectionTrait
{
    /**
     * @param DeleteVPCConnectionRequest $args
     * @return DeleteVPCConnectionResponse
     */
    public function deleteVPCConnection(DeleteVPCConnectionRequest $args)
    {
        $result = parent::deleteVPCConnection($args->toArray());
        return new DeleteVPCConnectionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateVPCConnection;

trait UpdateVPCConnectionTrait
{
    /**
     * @param UpdateVPCConnectionRequest $args
     * @return UpdateVPCConnectionResponse
     */
    public function updateVPCConnection(UpdateVPCConnectionRequest $args)
    {
        $result = parent::updateVPCConnection($args->toArray());
        return new UpdateVPCConnectionResponse($result->toArray());
    }
}

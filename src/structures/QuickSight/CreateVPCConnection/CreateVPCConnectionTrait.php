<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateVPCConnection;

trait CreateVPCConnectionTrait
{
    /**
     * @param CreateVPCConnectionRequest $args
     * @return CreateVPCConnectionResponse
     */
    public function createVPCConnection(CreateVPCConnectionRequest $args)
    {
        $result = parent::createVPCConnection($args->toArray());
        return new CreateVPCConnectionResponse($result->toArray());
    }
}

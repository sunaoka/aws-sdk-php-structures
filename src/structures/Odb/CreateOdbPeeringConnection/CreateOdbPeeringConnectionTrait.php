<?php

namespace Sunaoka\Aws\Structures\Odb\CreateOdbPeeringConnection;

trait CreateOdbPeeringConnectionTrait
{
    /**
     * @param CreateOdbPeeringConnectionRequest $args
     * @return CreateOdbPeeringConnectionResponse
     */
    public function createOdbPeeringConnection(CreateOdbPeeringConnectionRequest $args)
    {
        $result = parent::createOdbPeeringConnection($args->toArray());
        return new CreateOdbPeeringConnectionResponse($result->toArray());
    }
}

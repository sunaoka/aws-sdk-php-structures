<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbPeeringConnection;

trait GetOdbPeeringConnectionTrait
{
    /**
     * @param GetOdbPeeringConnectionRequest $args
     * @return GetOdbPeeringConnectionResponse
     */
    public function getOdbPeeringConnection(GetOdbPeeringConnectionRequest $args)
    {
        $result = parent::getOdbPeeringConnection($args->toArray());
        return new GetOdbPeeringConnectionResponse($result->toArray());
    }
}

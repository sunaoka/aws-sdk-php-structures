<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateOdbPeeringConnection;

trait UpdateOdbPeeringConnectionTrait
{
    /**
     * @param UpdateOdbPeeringConnectionRequest $args
     * @return UpdateOdbPeeringConnectionResponse
     */
    public function updateOdbPeeringConnection(UpdateOdbPeeringConnectionRequest $args)
    {
        $result = parent::updateOdbPeeringConnection($args->toArray());
        return new UpdateOdbPeeringConnectionResponse($result->toArray());
    }
}

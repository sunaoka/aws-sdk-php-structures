<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteOdbPeeringConnection;

trait DeleteOdbPeeringConnectionTrait
{
    /**
     * @param DeleteOdbPeeringConnectionRequest $args
     * @return DeleteOdbPeeringConnectionResponse
     */
    public function deleteOdbPeeringConnection(DeleteOdbPeeringConnectionRequest $args)
    {
        $result = parent::deleteOdbPeeringConnection($args->toArray());
        return new DeleteOdbPeeringConnectionResponse($result->toArray());
    }
}

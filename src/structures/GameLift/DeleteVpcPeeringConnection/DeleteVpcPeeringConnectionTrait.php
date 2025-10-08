<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteVpcPeeringConnection;

trait DeleteVpcPeeringConnectionTrait
{
    /**
     * @param DeleteVpcPeeringConnectionRequest $args
     * @return DeleteVpcPeeringConnectionResponse
     */
    public function deleteVpcPeeringConnection(DeleteVpcPeeringConnectionRequest $args)
    {
        $result = parent::deleteVpcPeeringConnection($args->toArray());
        return new DeleteVpcPeeringConnectionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateVpcPeeringConnection;

trait CreateVpcPeeringConnectionTrait
{
    /**
     * @param CreateVpcPeeringConnectionRequest $args
     * @return CreateVpcPeeringConnectionResponse
     */
    public function createVpcPeeringConnection(CreateVpcPeeringConnectionRequest $args)
    {
        $result = parent::createVpcPeeringConnection($args->toArray());
        return new CreateVpcPeeringConnectionResponse($result->toArray());
    }
}

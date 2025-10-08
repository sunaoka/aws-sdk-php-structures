<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcPeeringConnection;

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

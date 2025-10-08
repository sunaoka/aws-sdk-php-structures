<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection;

trait AcceptVpcPeeringConnectionTrait
{
    /**
     * @param AcceptVpcPeeringConnectionRequest $args
     * @return AcceptVpcPeeringConnectionResponse
     */
    public function acceptVpcPeeringConnection(AcceptVpcPeeringConnectionRequest $args)
    {
        $result = parent::acceptVpcPeeringConnection($args->toArray());
        return new AcceptVpcPeeringConnectionResponse($result->toArray());
    }
}

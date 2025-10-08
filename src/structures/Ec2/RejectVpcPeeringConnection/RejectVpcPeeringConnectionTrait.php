<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectVpcPeeringConnection;

trait RejectVpcPeeringConnectionTrait
{
    /**
     * @param RejectVpcPeeringConnectionRequest $args
     * @return RejectVpcPeeringConnectionResponse
     */
    public function rejectVpcPeeringConnection(RejectVpcPeeringConnectionRequest $args)
    {
        $result = parent::rejectVpcPeeringConnection($args->toArray());
        return new RejectVpcPeeringConnectionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateNatGatewayAddress;

trait UnassignPrivateNatGatewayAddressTrait
{
    /**
     * @param UnassignPrivateNatGatewayAddressRequest $args
     * @return UnassignPrivateNatGatewayAddressResponse
     */
    public function unassignPrivateNatGatewayAddress(UnassignPrivateNatGatewayAddressRequest $args)
    {
        $result = parent::unassignPrivateNatGatewayAddress($args->toArray());
        return new UnassignPrivateNatGatewayAddressResponse($result->toArray());
    }
}

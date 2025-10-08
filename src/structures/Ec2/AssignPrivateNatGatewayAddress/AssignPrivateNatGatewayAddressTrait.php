<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateNatGatewayAddress;

trait AssignPrivateNatGatewayAddressTrait
{
    /**
     * @param AssignPrivateNatGatewayAddressRequest $args
     * @return AssignPrivateNatGatewayAddressResponse
     */
    public function assignPrivateNatGatewayAddress(AssignPrivateNatGatewayAddressRequest $args)
    {
        $result = parent::assignPrivateNatGatewayAddress($args->toArray());
        return new AssignPrivateNatGatewayAddressResponse($result->toArray());
    }
}

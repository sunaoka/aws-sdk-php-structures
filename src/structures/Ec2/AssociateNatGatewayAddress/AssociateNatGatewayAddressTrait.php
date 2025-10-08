<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNatGatewayAddress;

trait AssociateNatGatewayAddressTrait
{
    /**
     * @param AssociateNatGatewayAddressRequest $args
     * @return AssociateNatGatewayAddressResponse
     */
    public function associateNatGatewayAddress(AssociateNatGatewayAddressRequest $args)
    {
        $result = parent::associateNatGatewayAddress($args->toArray());
        return new AssociateNatGatewayAddressResponse($result->toArray());
    }
}

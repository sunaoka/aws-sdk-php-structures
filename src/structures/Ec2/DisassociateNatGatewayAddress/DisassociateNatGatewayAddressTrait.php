<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNatGatewayAddress;

trait DisassociateNatGatewayAddressTrait
{
    /**
     * @param DisassociateNatGatewayAddressRequest $args
     * @return DisassociateNatGatewayAddressResponse
     */
    public function disassociateNatGatewayAddress(DisassociateNatGatewayAddressRequest $args)
    {
        $result = parent::disassociateNatGatewayAddress($args->toArray());
        return new DisassociateNatGatewayAddressResponse($result->toArray());
    }
}

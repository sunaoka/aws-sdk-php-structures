<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateCustomerGateway;

trait DisassociateCustomerGatewayTrait
{
    /**
     * @param DisassociateCustomerGatewayRequest $args
     * @return DisassociateCustomerGatewayResponse
     */
    public function disassociateCustomerGateway(DisassociateCustomerGatewayRequest $args)
    {
        $result = parent::disassociateCustomerGateway($args->toArray());
        return new DisassociateCustomerGatewayResponse($result->toArray());
    }
}

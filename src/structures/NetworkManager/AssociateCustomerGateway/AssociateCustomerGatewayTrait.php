<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateCustomerGateway;

trait AssociateCustomerGatewayTrait
{
    /**
     * @param AssociateCustomerGatewayRequest $args
     * @return AssociateCustomerGatewayResponse
     */
    public function associateCustomerGateway(AssociateCustomerGatewayRequest $args)
    {
        $result = parent::associateCustomerGateway($args->toArray());
        return new AssociateCustomerGatewayResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCustomerGatewayAssociations;

trait GetCustomerGatewayAssociationsTrait
{
    /**
     * @param GetCustomerGatewayAssociationsRequest $args
     * @return GetCustomerGatewayAssociationsResponse
     */
    public function getCustomerGatewayAssociations(GetCustomerGatewayAssociationsRequest $args)
    {
        $result = parent::getCustomerGatewayAssociations($args->toArray());
        return new GetCustomerGatewayAssociationsResponse($result->toArray());
    }
}

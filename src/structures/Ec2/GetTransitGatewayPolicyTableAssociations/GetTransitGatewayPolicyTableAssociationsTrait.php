<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableAssociations;

trait GetTransitGatewayPolicyTableAssociationsTrait
{
    /**
     * @param GetTransitGatewayPolicyTableAssociationsRequest $args
     * @return GetTransitGatewayPolicyTableAssociationsResponse
     */
    public function getTransitGatewayPolicyTableAssociations(GetTransitGatewayPolicyTableAssociationsRequest $args)
    {
        $result = parent::getTransitGatewayPolicyTableAssociations($args->toArray());
        return new GetTransitGatewayPolicyTableAssociationsResponse($result->toArray());
    }
}

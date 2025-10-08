<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayPolicyTable;

trait AssociateTransitGatewayPolicyTableTrait
{
    /**
     * @param AssociateTransitGatewayPolicyTableRequest $args
     * @return AssociateTransitGatewayPolicyTableResponse
     */
    public function associateTransitGatewayPolicyTable(AssociateTransitGatewayPolicyTableRequest $args)
    {
        $result = parent::associateTransitGatewayPolicyTable($args->toArray());
        return new AssociateTransitGatewayPolicyTableResponse($result->toArray());
    }
}

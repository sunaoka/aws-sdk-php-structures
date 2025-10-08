<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayPolicyTable;

trait DisassociateTransitGatewayPolicyTableTrait
{
    /**
     * @param DisassociateTransitGatewayPolicyTableRequest $args
     * @return DisassociateTransitGatewayPolicyTableResponse
     */
    public function disassociateTransitGatewayPolicyTable(DisassociateTransitGatewayPolicyTableRequest $args)
    {
        $result = parent::disassociateTransitGatewayPolicyTable($args->toArray());
        return new DisassociateTransitGatewayPolicyTableResponse($result->toArray());
    }
}

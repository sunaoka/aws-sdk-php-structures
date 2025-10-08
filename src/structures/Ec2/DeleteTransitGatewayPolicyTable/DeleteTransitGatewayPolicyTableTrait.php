<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPolicyTable;

trait DeleteTransitGatewayPolicyTableTrait
{
    /**
     * @param DeleteTransitGatewayPolicyTableRequest $args
     * @return DeleteTransitGatewayPolicyTableResponse
     */
    public function deleteTransitGatewayPolicyTable(DeleteTransitGatewayPolicyTableRequest $args)
    {
        $result = parent::deleteTransitGatewayPolicyTable($args->toArray());
        return new DeleteTransitGatewayPolicyTableResponse($result->toArray());
    }
}

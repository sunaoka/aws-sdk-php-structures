<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPolicyTable;

trait CreateTransitGatewayPolicyTableTrait
{
    /**
     * @param CreateTransitGatewayPolicyTableRequest $args
     * @return CreateTransitGatewayPolicyTableResponse
     */
    public function createTransitGatewayPolicyTable(CreateTransitGatewayPolicyTableRequest $args)
    {
        $result = parent::createTransitGatewayPolicyTable($args->toArray());
        return new CreateTransitGatewayPolicyTableResponse($result->toArray());
    }
}

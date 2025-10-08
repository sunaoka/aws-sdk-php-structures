<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway;

trait CreateNatGatewayTrait
{
    /**
     * @param CreateNatGatewayRequest $args
     * @return CreateNatGatewayResponse
     */
    public function createNatGateway(CreateNatGatewayRequest $args)
    {
        $result = parent::createNatGateway($args->toArray());
        return new CreateNatGatewayResponse($result->toArray());
    }
}

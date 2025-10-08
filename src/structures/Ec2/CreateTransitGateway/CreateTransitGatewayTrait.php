<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGateway;

trait CreateTransitGatewayTrait
{
    /**
     * @param CreateTransitGatewayRequest $args
     * @return CreateTransitGatewayResponse
     */
    public function createTransitGateway(CreateTransitGatewayRequest $args)
    {
        $result = parent::createTransitGateway($args->toArray());
        return new CreateTransitGatewayResponse($result->toArray());
    }
}

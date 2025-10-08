<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateEgressOnlyInternetGateway;

trait CreateEgressOnlyInternetGatewayTrait
{
    /**
     * @param CreateEgressOnlyInternetGatewayRequest $args
     * @return CreateEgressOnlyInternetGatewayResponse
     */
    public function createEgressOnlyInternetGateway(CreateEgressOnlyInternetGatewayRequest $args)
    {
        $result = parent::createEgressOnlyInternetGateway($args->toArray());
        return new CreateEgressOnlyInternetGatewayResponse($result->toArray());
    }
}

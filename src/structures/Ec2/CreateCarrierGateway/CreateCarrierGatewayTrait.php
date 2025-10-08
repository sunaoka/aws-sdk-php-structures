<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCarrierGateway;

trait CreateCarrierGatewayTrait
{
    /**
     * @param CreateCarrierGatewayRequest $args
     * @return CreateCarrierGatewayResponse
     */
    public function createCarrierGateway(CreateCarrierGatewayRequest $args)
    {
        $result = parent::createCarrierGateway($args->toArray());
        return new CreateCarrierGatewayResponse($result->toArray());
    }
}

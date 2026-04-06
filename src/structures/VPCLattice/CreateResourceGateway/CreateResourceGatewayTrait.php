<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceGateway;

trait CreateResourceGatewayTrait
{
    /**
     * @param CreateResourceGatewayRequest $args
     * @return CreateResourceGatewayResponse
     */
    public function createResourceGateway(CreateResourceGatewayRequest $args)
    {
        $result = parent::createResourceGateway($args->toArray());
        return new CreateResourceGatewayResponse($result->toArray());
    }
}

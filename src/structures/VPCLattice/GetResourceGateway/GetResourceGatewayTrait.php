<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceGateway;

trait GetResourceGatewayTrait
{
    /**
     * @param GetResourceGatewayRequest $args
     * @return GetResourceGatewayResponse
     */
    public function getResourceGateway(GetResourceGatewayRequest $args)
    {
        $result = parent::getResourceGateway($args->toArray());
        return new GetResourceGatewayResponse($result->toArray());
    }
}

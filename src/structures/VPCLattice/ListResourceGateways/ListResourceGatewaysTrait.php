<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceGateways;

trait ListResourceGatewaysTrait
{
    /**
     * @param ListResourceGatewaysRequest $args
     * @return ListResourceGatewaysResponse
     */
    public function listResourceGateways(ListResourceGatewaysRequest $args)
    {
        $result = parent::listResourceGateways($args->toArray());
        return new ListResourceGatewaysResponse($result->toArray());
    }
}

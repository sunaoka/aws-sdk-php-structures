<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualGateways;

trait ListVirtualGatewaysTrait
{
    /**
     * @param ListVirtualGatewaysRequest $args
     * @return ListVirtualGatewaysResponse
     */
    public function listVirtualGateways(ListVirtualGatewaysRequest $args)
    {
        $result = parent::listVirtualGateways($args->toArray());
        return new ListVirtualGatewaysResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcConnectors;

trait ListVpcConnectorsTrait
{
    /**
     * @param ListVpcConnectorsRequest $args
     * @return ListVpcConnectorsResponse
     */
    public function listVpcConnectors(ListVpcConnectorsRequest $args)
    {
        $result = parent::listVpcConnectors($args->toArray());
        return new ListVpcConnectorsResponse($result->toArray());
    }
}

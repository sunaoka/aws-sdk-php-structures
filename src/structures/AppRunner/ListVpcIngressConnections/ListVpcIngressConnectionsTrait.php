<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections;

trait ListVpcIngressConnectionsTrait
{
    /**
     * @param ListVpcIngressConnectionsRequest $args
     * @return ListVpcIngressConnectionsResponse
     */
    public function listVpcIngressConnections(ListVpcIngressConnectionsRequest $args)
    {
        $result = parent::listVpcIngressConnections($args->toArray());
        return new ListVpcIngressConnectionsResponse($result->toArray());
    }
}

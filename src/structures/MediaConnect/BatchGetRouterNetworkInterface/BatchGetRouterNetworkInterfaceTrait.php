<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterNetworkInterface;

trait BatchGetRouterNetworkInterfaceTrait
{
    /**
     * @param BatchGetRouterNetworkInterfaceRequest $args
     * @return BatchGetRouterNetworkInterfaceResponse
     */
    public function batchGetRouterNetworkInterface(BatchGetRouterNetworkInterfaceRequest $args)
    {
        $result = parent::batchGetRouterNetworkInterface($args->toArray());
        return new BatchGetRouterNetworkInterfaceResponse($result->toArray());
    }
}

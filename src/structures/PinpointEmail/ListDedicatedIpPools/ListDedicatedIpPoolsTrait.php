<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\ListDedicatedIpPools;

trait ListDedicatedIpPoolsTrait
{
    /**
     * @param ListDedicatedIpPoolsRequest $args
     * @return ListDedicatedIpPoolsResponse
     */
    public function listDedicatedIpPools(ListDedicatedIpPoolsRequest $args)
    {
        $result = parent::listDedicatedIpPools($args->toArray());
        return new ListDedicatedIpPoolsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAccountPools;

trait ListAccountPoolsTrait
{
    /**
     * @param ListAccountPoolsRequest $args
     * @return ListAccountPoolsResponse
     */
    public function listAccountPools(ListAccountPoolsRequest $args)
    {
        $result = parent::listAccountPools($args->toArray());
        return new ListAccountPoolsResponse($result->toArray());
    }
}

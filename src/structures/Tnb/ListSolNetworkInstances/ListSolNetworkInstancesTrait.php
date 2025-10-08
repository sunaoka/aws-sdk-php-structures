<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkInstances;

trait ListSolNetworkInstancesTrait
{
    /**
     * @param ListSolNetworkInstancesRequest $args
     * @return ListSolNetworkInstancesResponse
     */
    public function listSolNetworkInstances(ListSolNetworkInstancesRequest $args)
    {
        $result = parent::listSolNetworkInstances($args->toArray());
        return new ListSolNetworkInstancesResponse($result->toArray());
    }
}

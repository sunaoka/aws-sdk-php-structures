<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListServerNeighbors;

trait ListServerNeighborsTrait
{
    /**
     * @param ListServerNeighborsRequest $args
     * @return ListServerNeighborsResponse
     */
    public function listServerNeighbors(ListServerNeighborsRequest $args)
    {
        $result = parent::listServerNeighbors($args->toArray());
        return new ListServerNeighborsResponse($result->toArray());
    }
}

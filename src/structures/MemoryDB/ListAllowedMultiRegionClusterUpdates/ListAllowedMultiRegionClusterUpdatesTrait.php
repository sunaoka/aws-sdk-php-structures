<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ListAllowedMultiRegionClusterUpdates;

trait ListAllowedMultiRegionClusterUpdatesTrait
{
    /**
     * @param ListAllowedMultiRegionClusterUpdatesRequest $args
     * @return ListAllowedMultiRegionClusterUpdatesResponse
     */
    public function listAllowedMultiRegionClusterUpdates(ListAllowedMultiRegionClusterUpdatesRequest $args)
    {
        $result = parent::listAllowedMultiRegionClusterUpdates($args->toArray());
        return new ListAllowedMultiRegionClusterUpdatesResponse($result->toArray());
    }
}

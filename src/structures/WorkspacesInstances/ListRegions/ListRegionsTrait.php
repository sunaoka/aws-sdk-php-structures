<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListRegions;

trait ListRegionsTrait
{
    /**
     * @param ListRegionsRequest $args
     * @return ListRegionsResponse
     */
    public function listRegions(ListRegionsRequest $args)
    {
        $result = parent::listRegions($args->toArray());
        return new ListRegionsResponse($result->toArray());
    }
}

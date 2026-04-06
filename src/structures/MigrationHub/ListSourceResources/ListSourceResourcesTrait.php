<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListSourceResources;

trait ListSourceResourcesTrait
{
    /**
     * @param ListSourceResourcesRequest $args
     * @return ListSourceResourcesResponse
     */
    public function listSourceResources(ListSourceResourcesRequest $args)
    {
        $result = parent::listSourceResources($args->toArray());
        return new ListSourceResourcesResponse($result->toArray());
    }
}

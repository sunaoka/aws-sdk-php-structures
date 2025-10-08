<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListLaunchPaths;

trait ListLaunchPathsTrait
{
    /**
     * @param ListLaunchPathsRequest $args
     * @return ListLaunchPathsResponse
     */
    public function listLaunchPaths(ListLaunchPathsRequest $args)
    {
        $result = parent::listLaunchPaths($args->toArray());
        return new ListLaunchPathsResponse($result->toArray());
    }
}

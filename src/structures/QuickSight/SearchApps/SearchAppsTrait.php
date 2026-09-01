<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchApps;

trait SearchAppsTrait
{
    /**
     * @param SearchAppsRequest $args
     * @return SearchAppsResponse
     */
    public function searchApps(SearchAppsRequest $args)
    {
        $result = parent::searchApps($args->toArray());
        return new SearchAppsResponse($result->toArray());
    }
}

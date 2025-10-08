<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDashboards;

trait SearchDashboardsTrait
{
    /**
     * @param SearchDashboardsRequest $args
     * @return SearchDashboardsResponse
     */
    public function searchDashboards(SearchDashboardsRequest $args)
    {
        $result = parent::searchDashboards($args->toArray());
        return new SearchDashboardsResponse($result->toArray());
    }
}

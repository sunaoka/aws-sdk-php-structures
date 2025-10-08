<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDashboardVersions;

trait ListDashboardVersionsTrait
{
    /**
     * @param ListDashboardVersionsRequest $args
     * @return ListDashboardVersionsResponse
     */
    public function listDashboardVersions(ListDashboardVersionsRequest $args)
    {
        $result = parent::listDashboardVersions($args->toArray());
        return new ListDashboardVersionsResponse($result->toArray());
    }
}

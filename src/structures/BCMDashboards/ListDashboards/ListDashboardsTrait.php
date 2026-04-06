<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ListDashboards;

trait ListDashboardsTrait
{
    /**
     * @param ListDashboardsRequest $args
     * @return ListDashboardsResponse
     */
    public function listDashboards(ListDashboardsRequest $args)
    {
        $result = parent::listDashboards($args->toArray());
        return new ListDashboardsResponse($result->toArray());
    }
}

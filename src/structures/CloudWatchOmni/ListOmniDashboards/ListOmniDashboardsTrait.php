<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListOmniDashboards;

trait ListOmniDashboardsTrait
{
    /**
     * @param ListOmniDashboardsRequest $args
     * @return ListOmniDashboardsResponse
     */
    public function listOmniDashboards(ListOmniDashboardsRequest $args)
    {
        $result = parent::listOmniDashboards($args->toArray());
        return new ListOmniDashboardsResponse($result->toArray());
    }
}

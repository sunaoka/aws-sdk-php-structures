<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteDashboards;

trait DeleteDashboardsTrait
{
    /**
     * @param DeleteDashboardsRequest $args
     * @return DeleteDashboardsResponse
     */
    public function deleteDashboards(DeleteDashboardsRequest $args)
    {
        $result = parent::deleteDashboards($args->toArray());
        return new DeleteDashboardsResponse($result->toArray());
    }
}

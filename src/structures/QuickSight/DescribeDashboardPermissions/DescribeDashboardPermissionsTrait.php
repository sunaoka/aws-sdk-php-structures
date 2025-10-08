<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardPermissions;

trait DescribeDashboardPermissionsTrait
{
    /**
     * @param DescribeDashboardPermissionsRequest $args
     * @return DescribeDashboardPermissionsResponse
     */
    public function describeDashboardPermissions(DescribeDashboardPermissionsRequest $args)
    {
        $result = parent::describeDashboardPermissions($args->toArray());
        return new DescribeDashboardPermissionsResponse($result->toArray());
    }
}

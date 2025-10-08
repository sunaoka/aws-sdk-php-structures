<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderPermissions;

trait DescribeFolderPermissionsTrait
{
    /**
     * @param DescribeFolderPermissionsRequest $args
     * @return DescribeFolderPermissionsResponse
     */
    public function describeFolderPermissions(DescribeFolderPermissionsRequest $args)
    {
        $result = parent::describeFolderPermissions($args->toArray());
        return new DescribeFolderPermissionsResponse($result->toArray());
    }
}

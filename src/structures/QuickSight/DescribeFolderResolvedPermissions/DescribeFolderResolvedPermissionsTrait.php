<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderResolvedPermissions;

trait DescribeFolderResolvedPermissionsTrait
{
    /**
     * @param DescribeFolderResolvedPermissionsRequest $args
     * @return DescribeFolderResolvedPermissionsResponse
     */
    public function describeFolderResolvedPermissions(DescribeFolderResolvedPermissionsRequest $args)
    {
        $result = parent::describeFolderResolvedPermissions($args->toArray());
        return new DescribeFolderResolvedPermissionsResponse($result->toArray());
    }
}

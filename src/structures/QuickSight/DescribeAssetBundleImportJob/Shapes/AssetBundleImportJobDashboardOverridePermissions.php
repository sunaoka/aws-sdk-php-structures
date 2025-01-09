<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DashboardIds
 * @property AssetBundleResourcePermissions $Permissions
 * @property AssetBundleResourceLinkSharingConfiguration $LinkSharingConfiguration
 */
class AssetBundleImportJobDashboardOverridePermissions extends Shape
{
    /**
     * @param array{
     *     DashboardIds: list<string>,
     *     Permissions?: AssetBundleResourcePermissions,
     *     LinkSharingConfiguration?: AssetBundleResourceLinkSharingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

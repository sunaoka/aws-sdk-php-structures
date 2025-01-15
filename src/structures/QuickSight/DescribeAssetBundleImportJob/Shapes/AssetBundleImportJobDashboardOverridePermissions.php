<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DashboardIds
 * @property AssetBundleResourcePermissions|null $Permissions
 * @property AssetBundleResourceLinkSharingConfiguration|null $LinkSharingConfiguration
 */
class AssetBundleImportJobDashboardOverridePermissions extends Shape
{
    /**
     * @param array{
     *     DashboardIds: list<string>,
     *     Permissions?: AssetBundleResourcePermissions|null,
     *     LinkSharingConfiguration?: AssetBundleResourceLinkSharingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

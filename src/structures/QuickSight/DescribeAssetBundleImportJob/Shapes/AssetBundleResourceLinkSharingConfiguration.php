<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleResourcePermissions|null $Permissions
 */
class AssetBundleResourceLinkSharingConfiguration extends Shape
{
    /**
     * @param array{Permissions?: AssetBundleResourcePermissions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

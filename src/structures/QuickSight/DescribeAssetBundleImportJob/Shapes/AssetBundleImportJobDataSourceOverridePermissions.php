<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DataSourceIds
 * @property AssetBundleResourcePermissions $Permissions
 */
class AssetBundleImportJobDataSourceOverridePermissions extends Shape
{
    /**
     * @param array{
     *     DataSourceIds: list<string>,
     *     Permissions: AssetBundleResourcePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

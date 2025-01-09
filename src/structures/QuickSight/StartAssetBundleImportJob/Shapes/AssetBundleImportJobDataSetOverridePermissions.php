<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DataSetIds
 * @property AssetBundleResourcePermissions $Permissions
 */
class AssetBundleImportJobDataSetOverridePermissions extends Shape
{
    /**
     * @param array{
     *     DataSetIds: list<string>,
     *     Permissions: AssetBundleResourcePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

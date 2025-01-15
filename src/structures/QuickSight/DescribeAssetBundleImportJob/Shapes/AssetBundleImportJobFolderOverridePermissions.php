<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $FolderIds
 * @property AssetBundleResourcePermissions|null $Permissions
 */
class AssetBundleImportJobFolderOverridePermissions extends Shape
{
    /**
     * @param array{
     *     FolderIds: list<string>,
     *     Permissions?: AssetBundleResourcePermissions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $FolderIds
 * @property AssetBundleResourcePermissions $Permissions
 */
class AssetBundleImportJobFolderOverridePermissions extends Shape
{
    /**
     * @param array{
     *     FolderIds: list<string>,
     *     Permissions?: AssetBundleResourcePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

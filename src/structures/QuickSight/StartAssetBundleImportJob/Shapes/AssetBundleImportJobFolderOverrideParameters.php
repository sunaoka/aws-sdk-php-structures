<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FolderId
 * @property string|null $Name
 * @property string|null $ParentFolderArn
 */
class AssetBundleImportJobFolderOverrideParameters extends Shape
{
    /**
     * @param array{
     *     FolderId: string,
     *     Name?: string|null,
     *     ParentFolderArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

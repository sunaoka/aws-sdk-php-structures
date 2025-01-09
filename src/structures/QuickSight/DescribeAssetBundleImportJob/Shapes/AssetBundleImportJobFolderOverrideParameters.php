<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FolderId
 * @property string $Name
 * @property string $ParentFolderArn
 */
class AssetBundleImportJobFolderOverrideParameters extends Shape
{
    /**
     * @param array{
     *     FolderId: string,
     *     Name?: string,
     *     ParentFolderArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

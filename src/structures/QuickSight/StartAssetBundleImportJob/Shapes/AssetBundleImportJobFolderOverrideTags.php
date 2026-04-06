<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $FolderIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobFolderOverrideTags extends Shape
{
    /**
     * @param array{
     *     FolderIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

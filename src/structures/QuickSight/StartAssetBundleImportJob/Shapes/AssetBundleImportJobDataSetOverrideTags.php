<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DataSetIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobDataSetOverrideTags extends Shape
{
    /**
     * @param array{
     *     DataSetIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

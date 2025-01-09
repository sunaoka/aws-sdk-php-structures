<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DataSourceIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobDataSourceOverrideTags extends Shape
{
    /**
     * @param array{
     *     DataSourceIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

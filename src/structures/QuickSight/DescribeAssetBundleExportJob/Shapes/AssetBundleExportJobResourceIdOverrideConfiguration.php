<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $PrefixForAllResources
 */
class AssetBundleExportJobResourceIdOverrideConfiguration extends Shape
{
    /**
     * @param array{PrefixForAllResources?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrefixForAllResources
 */
class AssetBundleImportJobResourceIdOverrideConfiguration extends Shape
{
    /**
     * @param array{PrefixForAllResources?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

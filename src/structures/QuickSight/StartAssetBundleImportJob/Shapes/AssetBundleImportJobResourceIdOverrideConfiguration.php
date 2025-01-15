<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrefixForAllResources
 */
class AssetBundleImportJobResourceIdOverrideConfiguration extends Shape
{
    /**
     * @param array{PrefixForAllResources?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

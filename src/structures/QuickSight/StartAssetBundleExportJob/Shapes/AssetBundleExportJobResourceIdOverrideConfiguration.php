<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $PrefixForAllResources
 */
class AssetBundleExportJobResourceIdOverrideConfiguration extends Shape
{
    /**
     * @param array{PrefixForAllResources?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

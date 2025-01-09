<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $StrictModeForAllResources
 */
class AssetBundleExportJobValidationStrategy extends Shape
{
    /**
     * @param array{StrictModeForAllResources?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $StrictModeForAllResources
 */
class AssetBundleImportJobOverrideValidationStrategy extends Shape
{
    /**
     * @param array{StrictModeForAllResources?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

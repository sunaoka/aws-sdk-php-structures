<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Message
 */
class AssetBundleExportJobWarning extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

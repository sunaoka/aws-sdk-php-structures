<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Message
 */
class AssetBundleExportJobWarning extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

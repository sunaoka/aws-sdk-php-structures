<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property string $Name
 */
class AssetBundleImportJobDataSetOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

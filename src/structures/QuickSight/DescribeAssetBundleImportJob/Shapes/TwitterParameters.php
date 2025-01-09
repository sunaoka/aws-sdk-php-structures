<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Query
 * @property int $MaxRows
 */
class TwitterParameters extends Shape
{
    /**
     * @param array{
     *     Query: string,
     *     MaxRows: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

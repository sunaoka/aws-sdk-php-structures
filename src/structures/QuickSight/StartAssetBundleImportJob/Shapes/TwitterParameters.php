<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Query
 * @property int<1, max> $MaxRows
 */
class TwitterParameters extends Shape
{
    /**
     * @param array{
     *     Query: string,
     *     MaxRows: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

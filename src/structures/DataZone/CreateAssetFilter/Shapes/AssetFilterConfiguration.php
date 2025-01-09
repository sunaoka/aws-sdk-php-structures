<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnFilterConfiguration $columnConfiguration
 * @property RowFilterConfiguration $rowConfiguration
 */
class AssetFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     columnConfiguration?: ColumnFilterConfiguration,
     *     rowConfiguration?: RowFilterConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

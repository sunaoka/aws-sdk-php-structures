<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnFilterConfiguration|null $columnConfiguration
 * @property RowFilterConfiguration|null $rowConfiguration
 */
class AssetFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     columnConfiguration?: ColumnFilterConfiguration|null,
     *     rowConfiguration?: RowFilterConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

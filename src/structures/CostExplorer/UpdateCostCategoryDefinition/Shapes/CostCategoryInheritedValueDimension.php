<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINKED_ACCOUNT_NAME'|'TAG' $DimensionName
 * @property string $DimensionKey
 */
class CostCategoryInheritedValueDimension extends Shape
{
    /**
     * @param array{
     *     DimensionName?: 'LINKED_ACCOUNT_NAME'|'TAG',
     *     DimensionKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

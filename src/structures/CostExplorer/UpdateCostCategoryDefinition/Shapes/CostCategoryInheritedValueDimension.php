<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINKED_ACCOUNT_NAME'|'TAG'|null $DimensionName
 * @property string|null $DimensionKey
 */
class CostCategoryInheritedValueDimension extends Shape
{
    /**
     * @param array{
     *     DimensionName?: 'LINKED_ACCOUNT_NAME'|'TAG'|null,
     *     DimensionKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

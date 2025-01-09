<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property Expression $Rule
 * @property CostCategoryInheritedValueDimension $InheritedValue
 * @property 'REGULAR'|'INHERITED_VALUE' $Type
 */
class CostCategoryRule extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Rule?: Expression,
     *     InheritedValue?: CostCategoryInheritedValueDimension,
     *     Type?: 'REGULAR'|'INHERITED_VALUE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

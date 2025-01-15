<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property Expression|null $Rule
 * @property CostCategoryInheritedValueDimension|null $InheritedValue
 * @property 'REGULAR'|'INHERITED_VALUE'|null $Type
 */
class CostCategoryRule extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Rule?: Expression|null,
     *     InheritedValue?: CostCategoryInheritedValueDimension|null,
     *     Type?: 'REGULAR'|'INHERITED_VALUE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

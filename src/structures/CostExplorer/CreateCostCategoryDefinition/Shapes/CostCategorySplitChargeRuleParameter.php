<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOCATION_PERCENTAGES' $Type
 * @property list<string> $Values
 */
class CostCategorySplitChargeRuleParameter extends Shape
{
    /**
     * @param array{
     *     Type: 'ALLOCATION_PERCENTAGES',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

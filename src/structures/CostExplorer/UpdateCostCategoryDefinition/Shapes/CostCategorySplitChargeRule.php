<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property list<string> $Targets
 * @property 'FIXED'|'PROPORTIONAL'|'EVEN' $Method
 * @property list<CostCategorySplitChargeRuleParameter> $Parameters
 */
class CostCategorySplitChargeRule extends Shape
{
    /**
     * @param array{
     *     Source: string,
     *     Targets: list<string>,
     *     Method: 'FIXED'|'PROPORTIONAL'|'EVEN',
     *     Parameters?: list<CostCategorySplitChargeRuleParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

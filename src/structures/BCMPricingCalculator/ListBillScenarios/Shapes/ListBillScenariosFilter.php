<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATUS'|'NAME'|'GROUP_SHARING_PREFERENCE'|'COST_CATEGORY_ARN' $name
 * @property list<string> $values
 * @property 'EQUALS'|'STARTS_WITH'|'CONTAINS'|null $matchOption
 */
class ListBillScenariosFilter extends Shape
{
    /**
     * @param array{
     *     name: 'STATUS'|'NAME'|'GROUP_SHARING_PREFERENCE'|'COST_CATEGORY_ARN',
     *     values: list<string>,
     *     matchOption?: 'EQUALS'|'STARTS_WITH'|'CONTAINS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

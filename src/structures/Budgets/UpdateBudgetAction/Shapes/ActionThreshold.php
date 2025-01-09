<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ActionThresholdValue
 * @property 'PERCENTAGE'|'ABSOLUTE_VALUE' $ActionThresholdType
 */
class ActionThreshold extends Shape
{
    /**
     * @param array{
     *     ActionThresholdValue: double,
     *     ActionThresholdType: 'PERCENTAGE'|'ABSOLUTE_VALUE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

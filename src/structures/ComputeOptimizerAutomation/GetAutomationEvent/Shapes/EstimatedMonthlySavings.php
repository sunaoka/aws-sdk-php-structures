<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $currency
 * @property double $beforeDiscountSavings
 * @property double $afterDiscountSavings
 * @property 'BeforeDiscount'|'AfterDiscount' $savingsEstimationMode
 */
class EstimatedMonthlySavings extends Shape
{
    /**
     * @param array{
     *     currency: string,
     *     beforeDiscountSavings: double,
     *     afterDiscountSavings: double,
     *     savingsEstimationMode: 'BeforeDiscount'|'AfterDiscount'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

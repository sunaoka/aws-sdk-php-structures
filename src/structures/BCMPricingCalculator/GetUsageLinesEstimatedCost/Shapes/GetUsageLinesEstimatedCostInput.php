<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $key
 * @property double $amount
 */
class GetUsageLinesEstimatedCostInput extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     key: string,
     *     amount: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

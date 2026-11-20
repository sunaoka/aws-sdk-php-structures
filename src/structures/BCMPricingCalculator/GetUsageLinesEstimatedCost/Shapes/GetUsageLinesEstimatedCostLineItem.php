<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string|null $serviceCode
 * @property string|null $usageType
 * @property string|null $operation
 * @property GetUsageLinesEstimatedCostEstimatedCost|null $estimatedCost
 */
class GetUsageLinesEstimatedCostLineItem extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     serviceCode?: string|null,
     *     usageType?: string|null,
     *     operation?: string|null,
     *     estimatedCost?: GetUsageLinesEstimatedCostEstimatedCost|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

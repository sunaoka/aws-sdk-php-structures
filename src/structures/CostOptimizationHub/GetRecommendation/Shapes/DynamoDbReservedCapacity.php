<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamoDbReservedCapacityConfiguration|null $configuration
 * @property ReservedInstancesCostCalculation|null $costCalculation
 */
class DynamoDbReservedCapacity extends Shape
{
    /**
     * @param array{
     *     configuration?: DynamoDbReservedCapacityConfiguration|null,
     *     costCalculation?: ReservedInstancesCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountScope
 * @property string|null $service
 * @property string|null $term
 * @property string|null $paymentOption
 * @property string|null $reservedInstancesRegion
 * @property string|null $upfrontCost
 * @property string|null $monthlyRecurringCost
 * @property string|null $numberOfCapacityUnitsToPurchase
 * @property string|null $capacityUnits
 */
class DynamoDbReservedCapacityConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string|null,
     *     service?: string|null,
     *     term?: string|null,
     *     paymentOption?: string|null,
     *     reservedInstancesRegion?: string|null,
     *     upfrontCost?: string|null,
     *     monthlyRecurringCost?: string|null,
     *     numberOfCapacityUnitsToPurchase?: string|null,
     *     capacityUnits?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

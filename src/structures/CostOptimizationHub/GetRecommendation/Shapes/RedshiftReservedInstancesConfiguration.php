<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountScope
 * @property string $service
 * @property string $normalizedUnitsToPurchase
 * @property string $term
 * @property string $paymentOption
 * @property string $numberOfInstancesToPurchase
 * @property string $instanceFamily
 * @property string $instanceType
 * @property string $reservedInstancesRegion
 * @property bool $sizeFlexEligible
 * @property string $currentGeneration
 * @property string $upfrontCost
 * @property string $monthlyRecurringCost
 */
class RedshiftReservedInstancesConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string,
     *     service?: string,
     *     normalizedUnitsToPurchase?: string,
     *     term?: string,
     *     paymentOption?: string,
     *     numberOfInstancesToPurchase?: string,
     *     instanceFamily?: string,
     *     instanceType?: string,
     *     reservedInstancesRegion?: string,
     *     sizeFlexEligible?: bool,
     *     currentGeneration?: string,
     *     upfrontCost?: string,
     *     monthlyRecurringCost?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

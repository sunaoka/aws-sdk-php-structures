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
 * @property string $offeringClass
 * @property string $instanceFamily
 * @property string $instanceType
 * @property string $reservedInstancesRegion
 * @property string $currentGeneration
 * @property string $platform
 * @property string $tenancy
 * @property bool $sizeFlexEligible
 * @property string $upfrontCost
 * @property string $monthlyRecurringCost
 */
class Ec2ReservedInstancesConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string,
     *     service?: string,
     *     normalizedUnitsToPurchase?: string,
     *     term?: string,
     *     paymentOption?: string,
     *     numberOfInstancesToPurchase?: string,
     *     offeringClass?: string,
     *     instanceFamily?: string,
     *     instanceType?: string,
     *     reservedInstancesRegion?: string,
     *     currentGeneration?: string,
     *     platform?: string,
     *     tenancy?: string,
     *     sizeFlexEligible?: bool,
     *     upfrontCost?: string,
     *     monthlyRecurringCost?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

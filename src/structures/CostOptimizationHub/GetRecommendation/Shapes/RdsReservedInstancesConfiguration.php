<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountScope
 * @property string|null $service
 * @property string|null $normalizedUnitsToPurchase
 * @property string|null $term
 * @property string|null $paymentOption
 * @property string|null $numberOfInstancesToPurchase
 * @property string|null $instanceFamily
 * @property string|null $instanceType
 * @property string|null $reservedInstancesRegion
 * @property bool|null $sizeFlexEligible
 * @property string|null $currentGeneration
 * @property string|null $upfrontCost
 * @property string|null $monthlyRecurringCost
 * @property string|null $licenseModel
 * @property string|null $databaseEdition
 * @property string|null $databaseEngine
 * @property string|null $deploymentOption
 */
class RdsReservedInstancesConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string|null,
     *     service?: string|null,
     *     normalizedUnitsToPurchase?: string|null,
     *     term?: string|null,
     *     paymentOption?: string|null,
     *     numberOfInstancesToPurchase?: string|null,
     *     instanceFamily?: string|null,
     *     instanceType?: string|null,
     *     reservedInstancesRegion?: string|null,
     *     sizeFlexEligible?: bool|null,
     *     currentGeneration?: string|null,
     *     upfrontCost?: string|null,
     *     monthlyRecurringCost?: string|null,
     *     licenseModel?: string|null,
     *     databaseEdition?: string|null,
     *     databaseEngine?: string|null,
     *     deploymentOption?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

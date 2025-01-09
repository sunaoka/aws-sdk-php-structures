<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $location
 * @property string $availabilityZone
 * @property string $id
 * @property string $lineItemId
 * @property string $lineItemType
 * @property string $payerAccountId
 * @property string $usageAccountId
 * @property UsageQuantityResult $estimatedUsageQuantity
 * @property CostAmount $estimatedCost
 * @property UsageQuantityResult $historicalUsageQuantity
 * @property CostAmount $historicalCost
 * @property list<string> $savingsPlanArns
 */
class BillEstimateLineItemSummary extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string,
     *     availabilityZone?: string,
     *     id?: string,
     *     lineItemId?: string,
     *     lineItemType?: string,
     *     payerAccountId?: string,
     *     usageAccountId?: string,
     *     estimatedUsageQuantity?: UsageQuantityResult,
     *     estimatedCost?: CostAmount,
     *     historicalUsageQuantity?: UsageQuantityResult,
     *     historicalCost?: CostAmount,
     *     savingsPlanArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

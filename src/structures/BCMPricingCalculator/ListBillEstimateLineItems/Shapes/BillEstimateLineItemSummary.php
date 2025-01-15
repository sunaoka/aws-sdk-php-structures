<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string|null $location
 * @property string|null $availabilityZone
 * @property string|null $id
 * @property string|null $lineItemId
 * @property string|null $lineItemType
 * @property string|null $payerAccountId
 * @property string|null $usageAccountId
 * @property UsageQuantityResult|null $estimatedUsageQuantity
 * @property CostAmount|null $estimatedCost
 * @property UsageQuantityResult|null $historicalUsageQuantity
 * @property CostAmount|null $historicalCost
 * @property list<string>|null $savingsPlanArns
 */
class BillEstimateLineItemSummary extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string|null,
     *     availabilityZone?: string|null,
     *     id?: string|null,
     *     lineItemId?: string|null,
     *     lineItemType?: string|null,
     *     payerAccountId?: string|null,
     *     usageAccountId?: string|null,
     *     estimatedUsageQuantity?: UsageQuantityResult|null,
     *     estimatedCost?: CostAmount|null,
     *     historicalUsageQuantity?: UsageQuantityResult|null,
     *     historicalCost?: CostAmount|null,
     *     savingsPlanArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

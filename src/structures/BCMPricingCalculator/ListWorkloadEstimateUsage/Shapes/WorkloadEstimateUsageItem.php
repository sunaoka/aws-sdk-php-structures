<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string|null $location
 * @property string|null $id
 * @property string|null $usageAccountId
 * @property string|null $group
 * @property WorkloadEstimateUsageQuantity|null $quantity
 * @property double|null $cost
 * @property 'USD'|null $currency
 * @property 'VALID'|'INVALID'|'STALE'|null $status
 * @property HistoricalUsageEntity|null $historicalUsage
 */
class WorkloadEstimateUsageItem extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string|null,
     *     id?: string|null,
     *     usageAccountId?: string|null,
     *     group?: string|null,
     *     quantity?: WorkloadEstimateUsageQuantity|null,
     *     cost?: double|null,
     *     currency?: 'USD'|null,
     *     status?: 'VALID'|'INVALID'|'STALE'|null,
     *     historicalUsage?: HistoricalUsageEntity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

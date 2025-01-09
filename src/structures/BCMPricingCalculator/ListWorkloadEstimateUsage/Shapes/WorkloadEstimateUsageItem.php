<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $location
 * @property string $id
 * @property string $usageAccountId
 * @property string $group
 * @property WorkloadEstimateUsageQuantity $quantity
 * @property double $cost
 * @property 'USD' $currency
 * @property 'VALID'|'INVALID'|'STALE' $status
 * @property HistoricalUsageEntity $historicalUsage
 */
class WorkloadEstimateUsageItem extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string,
     *     id?: string,
     *     usageAccountId?: string,
     *     group?: string,
     *     quantity?: WorkloadEstimateUsageQuantity,
     *     cost?: double,
     *     currency?: 'USD',
     *     status?: 'VALID'|'INVALID'|'STALE',
     *     historicalUsage?: HistoricalUsageEntity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

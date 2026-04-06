<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputUsageModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string|null $location
 * @property string|null $availabilityZone
 * @property string|null $id
 * @property string|null $group
 * @property string|null $usageAccountId
 * @property list<UsageQuantity>|null $quantities
 * @property HistoricalUsageEntity|null $historicalUsage
 */
class BillEstimateInputUsageModificationSummary extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string|null,
     *     availabilityZone?: string|null,
     *     id?: string|null,
     *     group?: string|null,
     *     usageAccountId?: string|null,
     *     quantities?: list<UsageQuantity>|null,
     *     historicalUsage?: HistoricalUsageEntity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

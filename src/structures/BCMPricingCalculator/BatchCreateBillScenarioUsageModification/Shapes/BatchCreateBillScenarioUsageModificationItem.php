<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $location
 * @property string $availabilityZone
 * @property string $id
 * @property string $group
 * @property string $usageAccountId
 * @property list<UsageQuantity> $quantities
 * @property HistoricalUsageEntity $historicalUsage
 * @property string $key
 */
class BatchCreateBillScenarioUsageModificationItem extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string,
     *     availabilityZone?: string,
     *     id?: string,
     *     group?: string,
     *     usageAccountId?: string,
     *     quantities?: list<UsageQuantity>,
     *     historicalUsage?: HistoricalUsageEntity,
     *     key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

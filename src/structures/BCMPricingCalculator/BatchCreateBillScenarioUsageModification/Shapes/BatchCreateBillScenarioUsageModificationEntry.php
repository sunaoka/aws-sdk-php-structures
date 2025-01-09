<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $availabilityZone
 * @property string $key
 * @property string $group
 * @property string $usageAccountId
 * @property list<UsageAmount> $amounts
 * @property HistoricalUsageEntity $historicalUsage
 */
class BatchCreateBillScenarioUsageModificationEntry extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     availabilityZone?: string,
     *     key: string,
     *     group?: string,
     *     usageAccountId: string,
     *     amounts?: list<UsageAmount>,
     *     historicalUsage?: HistoricalUsageEntity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string|null $availabilityZone
 * @property string $key
 * @property string|null $group
 * @property string $usageAccountId
 * @property list<UsageAmount>|null $amounts
 * @property HistoricalUsageEntity|null $historicalUsage
 */
class BatchCreateBillScenarioUsageModificationEntry extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     availabilityZone?: string|null,
     *     key: string,
     *     group?: string|null,
     *     usageAccountId: string,
     *     amounts?: list<UsageAmount>|null,
     *     historicalUsage?: HistoricalUsageEntity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

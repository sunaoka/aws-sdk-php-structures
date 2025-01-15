<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $key
 * @property string|null $group
 * @property string $usageAccountId
 * @property double $amount
 * @property HistoricalUsageEntity|null $historicalUsage
 */
class BatchCreateWorkloadEstimateUsageEntry extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     key: string,
     *     group?: string|null,
     *     usageAccountId: string,
     *     amount: double,
     *     historicalUsage?: HistoricalUsageEntity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string $location
 * @property string $usageAccountId
 * @property BillInterval $billInterval
 * @property Expression $filterExpression
 */
class HistoricalUsageEntity extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string,
     *     usageAccountId: string,
     *     billInterval: BillInterval,
     *     filterExpression: Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

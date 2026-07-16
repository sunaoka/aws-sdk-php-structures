<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedWaterAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimePeriod $TimePeriod
 * @property array<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE', string> $DimensionsValues
 * @property string $ModelVersion
 * @property array<'TOTAL_WATER_WITHDRAWALS', WaterAllocation> $AllocationValues
 */
class EstimatedWaterAllocation extends Shape
{
    /**
     * @param array{
     *     TimePeriod: TimePeriod,
     *     DimensionsValues: array<'USAGE_ACCOUNT_ID'|'REGION'|'SERVICE', string>,
     *     ModelVersion: string,
     *     AllocationValues: array<'TOTAL_WATER_WITHDRAWALS', WaterAllocation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OnDemandHours
 * @property string|null $ReservedHours
 * @property string|null $TotalRunningHours
 * @property string|null $CoverageHoursPercentage
 */
class CoverageHours extends Shape
{
    /**
     * @param array{
     *     OnDemandHours?: string|null,
     *     ReservedHours?: string|null,
     *     TotalRunningHours?: string|null,
     *     CoverageHoursPercentage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

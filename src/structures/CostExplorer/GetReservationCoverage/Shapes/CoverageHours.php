<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OnDemandHours
 * @property string $ReservedHours
 * @property string $TotalRunningHours
 * @property string $CoverageHoursPercentage
 */
class CoverageHours extends Shape
{
    /**
     * @param array{
     *     OnDemandHours?: string,
     *     ReservedHours?: string,
     *     TotalRunningHours?: string,
     *     CoverageHoursPercentage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

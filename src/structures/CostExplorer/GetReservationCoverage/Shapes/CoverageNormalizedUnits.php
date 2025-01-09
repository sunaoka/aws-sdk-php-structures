<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OnDemandNormalizedUnits
 * @property string $ReservedNormalizedUnits
 * @property string $TotalRunningNormalizedUnits
 * @property string $CoverageNormalizedUnitsPercentage
 */
class CoverageNormalizedUnits extends Shape
{
    /**
     * @param array{
     *     OnDemandNormalizedUnits?: string,
     *     ReservedNormalizedUnits?: string,
     *     TotalRunningNormalizedUnits?: string,
     *     CoverageNormalizedUnitsPercentage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

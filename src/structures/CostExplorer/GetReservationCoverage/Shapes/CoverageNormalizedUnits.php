<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OnDemandNormalizedUnits
 * @property string|null $ReservedNormalizedUnits
 * @property string|null $TotalRunningNormalizedUnits
 * @property string|null $CoverageNormalizedUnitsPercentage
 */
class CoverageNormalizedUnits extends Shape
{
    /**
     * @param array{
     *     OnDemandNormalizedUnits?: string|null,
     *     ReservedNormalizedUnits?: string|null,
     *     TotalRunningNormalizedUnits?: string|null,
     *     CoverageNormalizedUnitsPercentage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

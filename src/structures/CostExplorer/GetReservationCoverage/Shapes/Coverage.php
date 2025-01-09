<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoverageHours $CoverageHours
 * @property CoverageNormalizedUnits $CoverageNormalizedUnits
 * @property CoverageCost $CoverageCost
 */
class Coverage extends Shape
{
    /**
     * @param array{
     *     CoverageHours?: CoverageHours,
     *     CoverageNormalizedUnits?: CoverageNormalizedUnits,
     *     CoverageCost?: CoverageCost
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

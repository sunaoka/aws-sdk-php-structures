<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoverageHours|null $CoverageHours
 * @property CoverageNormalizedUnits|null $CoverageNormalizedUnits
 * @property CoverageCost|null $CoverageCost
 */
class Coverage extends Shape
{
    /**
     * @param array{
     *     CoverageHours?: CoverageHours|null,
     *     CoverageNormalizedUnits?: CoverageNormalizedUnits|null,
     *     CoverageCost?: CoverageCost|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

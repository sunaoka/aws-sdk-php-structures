<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval $TimePeriod
 * @property list<ReservationCoverageGroup> $Groups
 * @property Coverage $Total
 */
class CoverageByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval,
     *     Groups?: list<ReservationCoverageGroup>,
     *     Total?: Coverage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

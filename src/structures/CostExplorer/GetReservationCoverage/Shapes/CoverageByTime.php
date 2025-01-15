<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval|null $TimePeriod
 * @property list<ReservationCoverageGroup>|null $Groups
 * @property Coverage|null $Total
 */
class CoverageByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval|null,
     *     Groups?: list<ReservationCoverageGroup>|null,
     *     Total?: Coverage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

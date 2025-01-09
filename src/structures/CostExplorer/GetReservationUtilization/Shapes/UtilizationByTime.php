<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval $TimePeriod
 * @property list<ReservationUtilizationGroup> $Groups
 * @property ReservationAggregates $Total
 */
class UtilizationByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval,
     *     Groups?: list<ReservationUtilizationGroup>,
     *     Total?: ReservationAggregates
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

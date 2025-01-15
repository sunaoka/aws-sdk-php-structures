<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval|null $TimePeriod
 * @property list<ReservationUtilizationGroup>|null $Groups
 * @property ReservationAggregates|null $Total
 */
class UtilizationByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval|null,
     *     Groups?: list<ReservationUtilizationGroup>|null,
     *     Total?: ReservationAggregates|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property array<string, string> $Attributes
 * @property ReservationAggregates $Utilization
 */
class ReservationUtilizationGroup extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     Attributes?: array<string, string>,
     *     Utilization?: ReservationAggregates
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

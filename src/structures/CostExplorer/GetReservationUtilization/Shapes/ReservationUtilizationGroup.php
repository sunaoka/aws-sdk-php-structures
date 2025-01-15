<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property array<string, string>|null $Attributes
 * @property ReservationAggregates|null $Utilization
 */
class ReservationUtilizationGroup extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     Attributes?: array<string, string>|null,
     *     Utilization?: ReservationAggregates|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

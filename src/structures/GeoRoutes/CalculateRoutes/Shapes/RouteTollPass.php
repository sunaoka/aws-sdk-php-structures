<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IncludesReturnTrip
 * @property bool $SeniorPass
 * @property int $TransferCount
 * @property int $TripCount
 * @property RouteTollPassValidityPeriod $ValidityPeriod
 */
class RouteTollPass extends Shape
{
    /**
     * @param array{
     *     IncludesReturnTrip?: bool,
     *     SeniorPass?: bool,
     *     TransferCount?: int,
     *     TripCount?: int,
     *     ValidityPeriod?: RouteTollPassValidityPeriod
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

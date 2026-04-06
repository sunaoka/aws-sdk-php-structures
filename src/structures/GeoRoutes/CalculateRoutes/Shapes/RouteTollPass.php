<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IncludesReturnTrip
 * @property bool|null $SeniorPass
 * @property int<0, max>|null $TransferCount
 * @property int<0, max>|null $TripCount
 * @property RouteTollPassValidityPeriod|null $ValidityPeriod
 */
class RouteTollPass extends Shape
{
    /**
     * @param array{
     *     IncludesReturnTrip?: bool|null,
     *     SeniorPass?: bool|null,
     *     TransferCount?: int<0, max>|null,
     *     TripCount?: int<0, max>|null,
     *     ValidityPeriod?: RouteTollPassValidityPeriod|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

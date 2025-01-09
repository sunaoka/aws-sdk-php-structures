<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IncludesReturnTrip
 * @property bool $SeniorPass
 * @property int<0, max> $TransferCount
 * @property int<0, max> $TripCount
 * @property RouteTollPassValidityPeriod $ValidityPeriod
 */
class RouteTollPass extends Shape
{
    /**
     * @param array{
     *     IncludesReturnTrip?: bool,
     *     SeniorPass?: bool,
     *     TransferCount?: int<0, max>,
     *     TripCount?: int<0, max>,
     *     ValidityPeriod?: RouteTollPassValidityPeriod
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

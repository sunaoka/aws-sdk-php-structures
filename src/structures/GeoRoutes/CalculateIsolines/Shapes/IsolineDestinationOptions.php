<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $AvoidActionsForDistance
 * @property double $Heading
 * @property IsolineMatchingOptions $Matching
 * @property IsolineSideOfStreetOptions $SideOfStreet
 */
class IsolineDestinationOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<0, 4294967295>,
     *     Heading?: double,
     *     Matching?: IsolineMatchingOptions,
     *     SideOfStreet?: IsolineSideOfStreetOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

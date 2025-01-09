<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvoidActionsForDistance
 * @property double $Heading
 * @property IsolineMatchingOptions $Matching
 * @property IsolineSideOfStreetOptions $SideOfStreet
 */
class IsolineOriginOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int,
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

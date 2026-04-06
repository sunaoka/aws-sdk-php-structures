<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $AvoidActionsForDistance
 * @property double|null $Heading
 * @property IsolineMatchingOptions|null $Matching
 * @property IsolineSideOfStreetOptions|null $SideOfStreet
 */
class IsolineOriginOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<0, 4294967295>|null,
     *     Heading?: double|null,
     *     Matching?: IsolineMatchingOptions|null,
     *     SideOfStreet?: IsolineSideOfStreetOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

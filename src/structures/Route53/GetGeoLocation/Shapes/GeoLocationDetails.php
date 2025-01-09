<?php

namespace Sunaoka\Aws\Structures\Route53\GetGeoLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContinentCode
 * @property string $ContinentName
 * @property string $CountryCode
 * @property string $CountryName
 * @property string $SubdivisionCode
 * @property string $SubdivisionName
 */
class GeoLocationDetails extends Shape
{
    /**
     * @param array{
     *     ContinentCode?: string,
     *     ContinentName?: string,
     *     CountryCode?: string,
     *     CountryName?: string,
     *     SubdivisionCode?: string,
     *     SubdivisionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

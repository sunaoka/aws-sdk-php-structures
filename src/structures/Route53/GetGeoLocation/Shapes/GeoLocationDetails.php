<?php

namespace Sunaoka\Aws\Structures\Route53\GetGeoLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContinentCode
 * @property string|null $ContinentName
 * @property string|null $CountryCode
 * @property string|null $CountryName
 * @property string|null $SubdivisionCode
 * @property string|null $SubdivisionName
 */
class GeoLocationDetails extends Shape
{
    /**
     * @param array{
     *     ContinentCode?: string|null,
     *     ContinentName?: string|null,
     *     CountryCode?: string|null,
     *     CountryName?: string|null,
     *     SubdivisionCode?: string|null,
     *     SubdivisionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

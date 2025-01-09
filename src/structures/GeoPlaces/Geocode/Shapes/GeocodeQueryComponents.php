<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property string $Region
 * @property string $SubRegion
 * @property string $Locality
 * @property string $District
 * @property string $Street
 * @property string $AddressNumber
 * @property string $PostalCode
 */
class GeocodeQueryComponents extends Shape
{
    /**
     * @param array{
     *     Country?: string,
     *     Region?: string,
     *     SubRegion?: string,
     *     Locality?: string,
     *     District?: string,
     *     Street?: string,
     *     AddressNumber?: string,
     *     PostalCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

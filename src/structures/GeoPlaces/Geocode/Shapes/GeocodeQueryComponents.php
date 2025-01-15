<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Country
 * @property string|null $Region
 * @property string|null $SubRegion
 * @property string|null $Locality
 * @property string|null $District
 * @property string|null $Street
 * @property string|null $AddressNumber
 * @property string|null $PostalCode
 */
class GeocodeQueryComponents extends Shape
{
    /**
     * @param array{
     *     Country?: string|null,
     *     Region?: string|null,
     *     SubRegion?: string|null,
     *     Locality?: string|null,
     *     District?: string|null,
     *     Street?: string|null,
     *     AddressNumber?: string|null,
     *     PostalCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

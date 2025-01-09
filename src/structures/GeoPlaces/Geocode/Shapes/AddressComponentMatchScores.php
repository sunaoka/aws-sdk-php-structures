<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Country
 * @property double $Region
 * @property double $SubRegion
 * @property double $Locality
 * @property double $District
 * @property double $SubDistrict
 * @property double $PostalCode
 * @property double $Block
 * @property double $SubBlock
 * @property list<double> $Intersection
 * @property double $AddressNumber
 * @property double $Building
 */
class AddressComponentMatchScores extends Shape
{
    /**
     * @param array{
     *     Country?: double,
     *     Region?: double,
     *     SubRegion?: double,
     *     Locality?: double,
     *     District?: double,
     *     SubDistrict?: double,
     *     PostalCode?: double,
     *     Block?: double,
     *     SubBlock?: double,
     *     Intersection?: list<double>,
     *     AddressNumber?: double,
     *     Building?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

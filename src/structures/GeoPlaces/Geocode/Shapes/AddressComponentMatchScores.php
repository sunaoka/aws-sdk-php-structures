<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Country
 * @property double|null $Region
 * @property double|null $SubRegion
 * @property double|null $Locality
 * @property double|null $District
 * @property double|null $SubDistrict
 * @property double|null $PostalCode
 * @property double|null $Block
 * @property double|null $SubBlock
 * @property list<double>|null $Intersection
 * @property double|null $AddressNumber
 * @property double|null $Building
 * @property list<SecondaryAddressComponentMatchScore>|null $SecondaryAddressComponents
 */
class AddressComponentMatchScores extends Shape
{
    /**
     * @param array{
     *     Country?: double|null,
     *     Region?: double|null,
     *     SubRegion?: double|null,
     *     Locality?: double|null,
     *     District?: double|null,
     *     SubDistrict?: double|null,
     *     PostalCode?: double|null,
     *     Block?: double|null,
     *     SubBlock?: double|null,
     *     Intersection?: list<double>|null,
     *     AddressNumber?: double|null,
     *     Building?: double|null,
     *     SecondaryAddressComponents?: list<SecondaryAddressComponentMatchScore>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

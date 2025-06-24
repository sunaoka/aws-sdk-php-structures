<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 * @property Country|null $Country
 * @property Region|null $Region
 * @property SubRegion|null $SubRegion
 * @property string|null $Locality
 * @property string|null $District
 * @property string|null $SubDistrict
 * @property string|null $PostalCode
 * @property string|null $Block
 * @property string|null $SubBlock
 * @property list<string>|null $Intersection
 * @property string|null $Street
 * @property list<StreetComponents>|null $StreetComponents
 * @property string|null $AddressNumber
 * @property string|null $Building
 * @property list<SecondaryAddressComponent>|null $SecondaryAddressComponents
 */
class Address extends Shape
{
    /**
     * @param array{
     *     Label?: string|null,
     *     Country?: Country|null,
     *     Region?: Region|null,
     *     SubRegion?: SubRegion|null,
     *     Locality?: string|null,
     *     District?: string|null,
     *     SubDistrict?: string|null,
     *     PostalCode?: string|null,
     *     Block?: string|null,
     *     SubBlock?: string|null,
     *     Intersection?: list<string>|null,
     *     Street?: string|null,
     *     StreetComponents?: list<StreetComponents>|null,
     *     AddressNumber?: string|null,
     *     Building?: string|null,
     *     SecondaryAddressComponents?: list<SecondaryAddressComponent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

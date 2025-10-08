<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ParsedQueryComponent>|null $Country
 * @property list<ParsedQueryComponent>|null $Region
 * @property list<ParsedQueryComponent>|null $SubRegion
 * @property list<ParsedQueryComponent>|null $Locality
 * @property list<ParsedQueryComponent>|null $District
 * @property list<ParsedQueryComponent>|null $SubDistrict
 * @property list<ParsedQueryComponent>|null $PostalCode
 * @property list<ParsedQueryComponent>|null $Block
 * @property list<ParsedQueryComponent>|null $SubBlock
 * @property list<ParsedQueryComponent>|null $Street
 * @property list<ParsedQueryComponent>|null $AddressNumber
 * @property list<ParsedQueryComponent>|null $Building
 * @property list<ParsedQuerySecondaryAddressComponent>|null $SecondaryAddressComponents
 */
class GeocodeParsedQueryAddressComponents extends Shape
{
    /**
     * @param array{
     *     Country?: list<ParsedQueryComponent>|null,
     *     Region?: list<ParsedQueryComponent>|null,
     *     SubRegion?: list<ParsedQueryComponent>|null,
     *     Locality?: list<ParsedQueryComponent>|null,
     *     District?: list<ParsedQueryComponent>|null,
     *     SubDistrict?: list<ParsedQueryComponent>|null,
     *     PostalCode?: list<ParsedQueryComponent>|null,
     *     Block?: list<ParsedQueryComponent>|null,
     *     SubBlock?: list<ParsedQueryComponent>|null,
     *     Street?: list<ParsedQueryComponent>|null,
     *     AddressNumber?: list<ParsedQueryComponent>|null,
     *     Building?: list<ParsedQueryComponent>|null,
     *     SecondaryAddressComponents?: list<ParsedQuerySecondaryAddressComponent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight>|null $Label
 * @property CountryHighlights|null $Country
 * @property RegionHighlights|null $Region
 * @property SubRegionHighlights|null $SubRegion
 * @property list<Highlight>|null $Locality
 * @property list<Highlight>|null $District
 * @property list<Highlight>|null $SubDistrict
 * @property list<Highlight>|null $Street
 * @property list<Highlight>|null $Block
 * @property list<Highlight>|null $SubBlock
 * @property list<list<Highlight>>|null $Intersection
 * @property list<Highlight>|null $PostalCode
 * @property list<Highlight>|null $AddressNumber
 * @property list<Highlight>|null $Building
 */
class AutocompleteAddressHighlights extends Shape
{
    /**
     * @param array{
     *     Label?: list<Highlight>|null,
     *     Country?: CountryHighlights|null,
     *     Region?: RegionHighlights|null,
     *     SubRegion?: SubRegionHighlights|null,
     *     Locality?: list<Highlight>|null,
     *     District?: list<Highlight>|null,
     *     SubDistrict?: list<Highlight>|null,
     *     Street?: list<Highlight>|null,
     *     Block?: list<Highlight>|null,
     *     SubBlock?: list<Highlight>|null,
     *     Intersection?: list<list<Highlight>>|null,
     *     PostalCode?: list<Highlight>|null,
     *     AddressNumber?: list<Highlight>|null,
     *     Building?: list<Highlight>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

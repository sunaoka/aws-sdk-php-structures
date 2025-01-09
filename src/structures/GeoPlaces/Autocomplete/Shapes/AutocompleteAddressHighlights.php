<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight> $Label
 * @property CountryHighlights $Country
 * @property RegionHighlights $Region
 * @property SubRegionHighlights $SubRegion
 * @property list<Highlight> $Locality
 * @property list<Highlight> $District
 * @property list<Highlight> $SubDistrict
 * @property list<Highlight> $Street
 * @property list<Highlight> $Block
 * @property list<Highlight> $SubBlock
 * @property list<list<Highlight>> $Intersection
 * @property list<Highlight> $PostalCode
 * @property list<Highlight> $AddressNumber
 * @property list<Highlight> $Building
 */
class AutocompleteAddressHighlights extends Shape
{
    /**
     * @param array{
     *     Label?: list<Highlight>,
     *     Country?: CountryHighlights,
     *     Region?: RegionHighlights,
     *     SubRegion?: SubRegionHighlights,
     *     Locality?: list<Highlight>,
     *     District?: list<Highlight>,
     *     SubDistrict?: list<Highlight>,
     *     Street?: list<Highlight>,
     *     Block?: list<Highlight>,
     *     SubBlock?: list<Highlight>,
     *     Intersection?: list<list<Highlight>>,
     *     PostalCode?: list<Highlight>,
     *     AddressNumber?: list<Highlight>,
     *     Building?: list<Highlight>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 * @property Country $Country
 * @property Region $Region
 * @property SubRegion $SubRegion
 * @property string $Locality
 * @property string $District
 * @property string $SubDistrict
 * @property string $PostalCode
 * @property string $Block
 * @property string $SubBlock
 * @property list<string> $Intersection
 * @property string $Street
 * @property list<StreetComponents> $StreetComponents
 * @property string $AddressNumber
 * @property string $Building
 */
class Address extends Shape
{
    /**
     * @param array{
     *     Label?: string,
     *     Country?: Country,
     *     Region?: Region,
     *     SubRegion?: SubRegion,
     *     Locality?: string,
     *     District?: string,
     *     SubDistrict?: string,
     *     PostalCode?: string,
     *     Block?: string,
     *     SubBlock?: string,
     *     Intersection?: list<string>,
     *     Street?: string,
     *     StreetComponents?: list<StreetComponents>,
     *     AddressNumber?: string,
     *     Building?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

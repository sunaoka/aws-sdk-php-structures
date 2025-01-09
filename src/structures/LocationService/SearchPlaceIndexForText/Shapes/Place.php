<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 * @property PlaceGeometry $Geometry
 * @property string $AddressNumber
 * @property string $Street
 * @property string $Neighborhood
 * @property string $Municipality
 * @property string $SubRegion
 * @property string $Region
 * @property string $Country
 * @property string $PostalCode
 * @property bool $Interpolated
 * @property TimeZone $TimeZone
 * @property string $UnitType
 * @property string $UnitNumber
 * @property list<string> $Categories
 * @property list<string> $SupplementalCategories
 * @property string $SubMunicipality
 */
class Place extends Shape
{
    /**
     * @param array{
     *     Label?: string,
     *     Geometry: PlaceGeometry,
     *     AddressNumber?: string,
     *     Street?: string,
     *     Neighborhood?: string,
     *     Municipality?: string,
     *     SubRegion?: string,
     *     Region?: string,
     *     Country?: string,
     *     PostalCode?: string,
     *     Interpolated?: bool,
     *     TimeZone?: TimeZone,
     *     UnitType?: string,
     *     UnitNumber?: string,
     *     Categories?: list<string>,
     *     SupplementalCategories?: list<string>,
     *     SubMunicipality?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

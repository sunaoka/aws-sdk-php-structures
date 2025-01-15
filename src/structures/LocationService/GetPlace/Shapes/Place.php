<?php

namespace Sunaoka\Aws\Structures\LocationService\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 * @property PlaceGeometry $Geometry
 * @property string|null $AddressNumber
 * @property string|null $Street
 * @property string|null $Neighborhood
 * @property string|null $Municipality
 * @property string|null $SubRegion
 * @property string|null $Region
 * @property string|null $Country
 * @property string|null $PostalCode
 * @property bool|null $Interpolated
 * @property TimeZone|null $TimeZone
 * @property string|null $UnitType
 * @property string|null $UnitNumber
 * @property list<string>|null $Categories
 * @property list<string>|null $SupplementalCategories
 * @property string|null $SubMunicipality
 */
class Place extends Shape
{
    /**
     * @param array{
     *     Label?: string|null,
     *     Geometry: PlaceGeometry,
     *     AddressNumber?: string|null,
     *     Street?: string|null,
     *     Neighborhood?: string|null,
     *     Municipality?: string|null,
     *     SubRegion?: string|null,
     *     Region?: string|null,
     *     Country?: string|null,
     *     PostalCode?: string|null,
     *     Interpolated?: bool|null,
     *     TimeZone?: TimeZone|null,
     *     UnitType?: string|null,
     *     UnitNumber?: string|null,
     *     Categories?: list<string>|null,
     *     SupplementalCategories?: list<string>|null,
     *     SubMunicipality?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

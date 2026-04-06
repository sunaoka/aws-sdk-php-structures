<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddressNumber
 * @property list<string>|null $Categories
 * @property string|null $Country
 * @property PlaceGeometry $Geometry
 * @property bool|null $Interpolated
 * @property string|null $Label
 * @property string|null $Municipality
 * @property string|null $Neighborhood
 * @property string|null $PostalCode
 * @property string|null $Region
 * @property string|null $Street
 * @property string|null $SubRegion
 * @property list<string>|null $SupplementalCategories
 * @property TimeZone|null $TimeZone
 * @property string|null $UnitNumber
 * @property string|null $UnitType
 */
class Place extends Shape
{
    /**
     * @param array{
     *     AddressNumber?: string|null,
     *     Categories?: list<string>|null,
     *     Country?: string|null,
     *     Geometry: PlaceGeometry,
     *     Interpolated?: bool|null,
     *     Label?: string|null,
     *     Municipality?: string|null,
     *     Neighborhood?: string|null,
     *     PostalCode?: string|null,
     *     Region?: string|null,
     *     Street?: string|null,
     *     SubRegion?: string|null,
     *     SupplementalCategories?: list<string>|null,
     *     TimeZone?: TimeZone|null,
     *     UnitNumber?: string|null,
     *     UnitType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

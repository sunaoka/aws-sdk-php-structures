<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AdminNames>|null $Locality
 * @property list<AdminNames>|null $Region
 * @property list<AdminNames>|null $District
 * @property list<AdminNames>|null $SubRegion
 */
class TranslationDetails extends Shape
{
    /**
     * @param array{
     *     Locality?: list<AdminNames>|null,
     *     Region?: list<AdminNames>|null,
     *     District?: list<AdminNames>|null,
     *     SubRegion?: list<AdminNames>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

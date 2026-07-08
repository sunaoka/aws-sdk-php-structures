<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $Position
 * @property 'Delivery'|'Emergency'|'Entrance'|'Loading'|'Other'|'Parking'|'Taxi'|null $Type
 * @property bool|null $Primary
 * @property string|null $Label
 */
class AccessPoint extends Shape
{
    /**
     * @param array{
     *     Position?: list<double>|null,
     *     Type?: 'Delivery'|'Emergency'|'Entrance'|'Loading'|'Other'|'Parking'|'Taxi'|null,
     *     Primary?: bool|null,
     *     Label?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

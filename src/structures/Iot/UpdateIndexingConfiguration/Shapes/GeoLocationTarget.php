<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'LatLon'|'LonLat'|null $order
 */
class GeoLocationTarget extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     order?: 'LatLon'|'LonLat'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'LatLon'|'LonLat' $order
 */
class GeoLocationTarget extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     order?: 'LatLon'|'LonLat'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

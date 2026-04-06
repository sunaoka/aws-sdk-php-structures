<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $namedShadowNames
 * @property list<GeoLocationTarget>|null $geoLocations
 */
class IndexingFilter extends Shape
{
    /**
     * @param array{
     *     namedShadowNames?: list<string>|null,
     *     geoLocations?: list<GeoLocationTarget>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $namedShadowNames
 * @property list<GeoLocationTarget> $geoLocations
 */
class IndexingFilter extends Shape
{
    /**
     * @param array{
     *     namedShadowNames?: list<string>,
     *     geoLocations?: list<GeoLocationTarget>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

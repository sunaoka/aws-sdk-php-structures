<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $namedShadowNames
 * @property list<GeoLocationTarget>|null $geoLocations
 * @property ConnectivityFilter|null $connectivity
 */
class IndexingFilter extends Shape
{
    /**
     * @param array{
     *     namedShadowNames?: list<string>|null,
     *     geoLocations?: list<GeoLocationTarget>|null,
     *     connectivity?: ConnectivityFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BINARY'|'XML'|null $AdMarkerDash
 * @property 'ALL'|'MATCHES_FILTER'|null $ScteInManifests
 */
class ScteDash extends Shape
{
    /**
     * @param array{
     *     AdMarkerDash?: 'BINARY'|'XML'|null,
     *     ScteInManifests?: 'ALL'|'MATCHES_FILTER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

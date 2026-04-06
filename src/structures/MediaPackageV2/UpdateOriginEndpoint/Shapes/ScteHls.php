<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DATERANGE'|'SCTE35_ENHANCED'|null $AdMarkerHls
 */
class ScteHls extends Shape
{
    /**
     * @param array{AdMarkerHls?: 'DATERANGE'|'SCTE35_ENHANCED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DATERANGE' $AdMarkerHls
 */
class ScteHls extends Shape
{
    /**
     * @param array{AdMarkerHls?: 'DATERANGE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

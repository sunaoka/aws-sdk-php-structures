<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BINARY'|'XML' $AdMarkerDash
 */
class ScteDash extends Shape
{
    /**
     * @param array{AdMarkerDash?: 'BINARY'|'XML'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

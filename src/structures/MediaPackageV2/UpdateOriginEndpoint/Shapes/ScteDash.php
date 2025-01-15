<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BINARY'|'XML'|null $AdMarkerDash
 */
class ScteDash extends Shape
{
    /**
     * @param array{AdMarkerDash?: 'BINARY'|'XML'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

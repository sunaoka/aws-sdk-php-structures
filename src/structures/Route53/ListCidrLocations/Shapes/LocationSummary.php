<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocationName
 */
class LocationSummary extends Shape
{
    /**
     * @param array{LocationName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

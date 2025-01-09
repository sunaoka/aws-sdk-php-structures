<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialPointStyle $Style
 */
class GeospatialPointLayer extends Shape
{
    /**
     * @param array{Style: GeospatialPointStyle} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

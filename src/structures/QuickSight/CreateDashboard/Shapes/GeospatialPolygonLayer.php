<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialPolygonStyle $Style
 */
class GeospatialPolygonLayer extends Shape
{
    /**
     * @param array{Style: GeospatialPolygonStyle} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

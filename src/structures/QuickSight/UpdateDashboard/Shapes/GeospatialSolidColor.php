<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 * @property 'ENABLED'|'DISABLED' $State
 */
class GeospatialSolidColor extends Shape
{
    /**
     * @param array{
     *     Color: string,
     *     State?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

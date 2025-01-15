<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class GeospatialSolidColor extends Shape
{
    /**
     * @param array{
     *     Color: string,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

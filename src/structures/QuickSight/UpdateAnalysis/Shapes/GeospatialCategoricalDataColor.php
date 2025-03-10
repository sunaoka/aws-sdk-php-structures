<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 * @property string $DataValue
 */
class GeospatialCategoricalDataColor extends Shape
{
    /**
     * @param array{
     *     Color: string,
     *     DataValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

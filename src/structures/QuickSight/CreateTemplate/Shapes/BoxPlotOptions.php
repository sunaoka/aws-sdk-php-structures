<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoxPlotStyleOptions $StyleOptions
 * @property 'HIDDEN'|'VISIBLE' $OutlierVisibility
 * @property 'HIDDEN'|'VISIBLE' $AllDataPointsVisibility
 */
class BoxPlotOptions extends Shape
{
    /**
     * @param array{
     *     StyleOptions?: BoxPlotStyleOptions,
     *     OutlierVisibility?: 'HIDDEN'|'VISIBLE',
     *     AllDataPointsVisibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

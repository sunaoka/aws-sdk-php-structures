<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoxPlotStyleOptions|null $StyleOptions
 * @property 'HIDDEN'|'VISIBLE'|null $OutlierVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $AllDataPointsVisibility
 */
class BoxPlotOptions extends Shape
{
    /**
     * @param array{
     *     StyleOptions?: BoxPlotStyleOptions|null,
     *     OutlierVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     AllDataPointsVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

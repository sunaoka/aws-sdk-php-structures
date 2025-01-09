<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReferenceLineStaticDataConfiguration $StaticConfiguration
 * @property ReferenceLineDynamicDataConfiguration $DynamicConfiguration
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS' $AxisBinding
 * @property 'BAR'|'LINE' $SeriesType
 */
class ReferenceLineDataConfiguration extends Shape
{
    /**
     * @param array{
     *     StaticConfiguration?: ReferenceLineStaticDataConfiguration,
     *     DynamicConfiguration?: ReferenceLineDynamicDataConfiguration,
     *     AxisBinding?: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS',
     *     SeriesType?: 'BAR'|'LINE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

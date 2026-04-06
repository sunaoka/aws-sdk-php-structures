<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReferenceLineStaticDataConfiguration|null $StaticConfiguration
 * @property ReferenceLineDynamicDataConfiguration|null $DynamicConfiguration
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS'|null $AxisBinding
 */
class ReferenceLineDataConfiguration extends Shape
{
    /**
     * @param array{
     *     StaticConfiguration?: ReferenceLineStaticDataConfiguration|null,
     *     DynamicConfiguration?: ReferenceLineDynamicDataConfiguration|null,
     *     AxisBinding?: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

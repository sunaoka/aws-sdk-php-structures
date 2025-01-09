<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY' $BaseMapStyle
 * @property string $BackgroundColor
 * @property 'HIDDEN'|'VISIBLE' $BaseMapVisibility
 */
class GeospatialMapStyle extends Shape
{
    /**
     * @param array{
     *     BaseMapStyle?: 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY',
     *     BackgroundColor?: string,
     *     BaseMapVisibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

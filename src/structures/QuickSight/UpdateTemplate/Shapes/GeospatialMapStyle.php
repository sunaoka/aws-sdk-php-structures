<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY'|null $BaseMapStyle
 * @property string|null $BackgroundColor
 * @property 'HIDDEN'|'VISIBLE'|null $BaseMapVisibility
 */
class GeospatialMapStyle extends Shape
{
    /**
     * @param array{
     *     BaseMapStyle?: 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY'|null,
     *     BackgroundColor?: string|null,
     *     BaseMapVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

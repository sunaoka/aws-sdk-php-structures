<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElementValue
 * @property 'HIDDEN'|'VISIBLE'|null $DecalVisibility
 * @property string|null $DecalColor
 * @property 'SOLID'|'DIAGONAL_MEDIUM'|'CIRCLE_MEDIUM'|'DIAMOND_GRID_MEDIUM'|'CHECKERBOARD_MEDIUM'|'TRIANGLE_MEDIUM'|'DIAGONAL_OPPOSITE_MEDIUM'|'DIAMOND_MEDIUM'|'DIAGONAL_LARGE'|'CIRCLE_LARGE'|'DIAMOND_GRID_LARGE'|'CHECKERBOARD_LARGE'|'TRIANGLE_LARGE'|'DIAGONAL_OPPOSITE_LARGE'|'DIAMOND_LARGE'|'DIAGONAL_SMALL'|'CIRCLE_SMALL'|'DIAMOND_GRID_SMALL'|'CHECKERBOARD_SMALL'|'TRIANGLE_SMALL'|'DIAGONAL_OPPOSITE_SMALL'|'DIAMOND_SMALL'|null $DecalPatternType
 * @property 'Manual'|'Auto'|null $DecalStyleType
 */
class DecalSettings extends Shape
{
    /**
     * @param array{
     *     ElementValue?: string|null,
     *     DecalVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     DecalColor?: string|null,
     *     DecalPatternType?: 'SOLID'|'DIAGONAL_MEDIUM'|'CIRCLE_MEDIUM'|'DIAMOND_GRID_MEDIUM'|'CHECKERBOARD_MEDIUM'|'TRIANGLE_MEDIUM'|'DIAGONAL_OPPOSITE_MEDIUM'|'DIAMOND_MEDIUM'|'DIAGONAL_LARGE'|'CIRCLE_LARGE'|'DIAMOND_GRID_LARGE'|'CHECKERBOARD_LARGE'|'TRIANGLE_LARGE'|'DIAGONAL_OPPOSITE_LARGE'|'DIAMOND_LARGE'|'DIAGONAL_SMALL'|'CIRCLE_SMALL'|'DIAMOND_GRID_SMALL'|'CHECKERBOARD_SMALL'|'TRIANGLE_SMALL'|'DIAGONAL_OPPOSITE_SMALL'|'DIAMOND_SMALL'|null,
     *     DecalStyleType?: 'Manual'|'Auto'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property LabelOptions $Title
 * @property 'AUTO'|'RIGHT'|'BOTTOM'|'TOP' $Position
 * @property string $Width
 * @property string $Height
 * @property FontConfiguration $ValueFontConfiguration
 */
class LegendOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     Title?: LabelOptions,
     *     Position?: 'AUTO'|'RIGHT'|'BOTTOM'|'TOP',
     *     Width?: string,
     *     Height?: string,
     *     ValueFontConfiguration?: FontConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

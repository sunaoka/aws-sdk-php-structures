<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property LabelOptions|null $Title
 * @property 'AUTO'|'RIGHT'|'BOTTOM'|'TOP'|null $Position
 * @property string|null $Width
 * @property string|null $Height
 * @property FontConfiguration|null $ValueFontConfiguration
 */
class LegendOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Title?: LabelOptions|null,
     *     Position?: 'AUTO'|'RIGHT'|'BOTTOM'|'TOP'|null,
     *     Width?: string|null,
     *     Height?: string|null,
     *     ValueFontConfiguration?: FontConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

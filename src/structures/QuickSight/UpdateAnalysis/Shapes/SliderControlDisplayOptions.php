<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions $TitleOptions
 * @property SheetControlInfoIconLabelOptions $InfoIconLabelOptions
 */
class SliderControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

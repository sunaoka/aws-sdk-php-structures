<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions $TitleOptions
 * @property TextControlPlaceholderOptions $PlaceholderOptions
 * @property SheetControlInfoIconLabelOptions $InfoIconLabelOptions
 */
class TextAreaControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions,
     *     PlaceholderOptions?: TextControlPlaceholderOptions,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

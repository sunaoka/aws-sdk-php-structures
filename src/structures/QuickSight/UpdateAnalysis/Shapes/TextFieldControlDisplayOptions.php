<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions|null $TitleOptions
 * @property TextControlPlaceholderOptions|null $PlaceholderOptions
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 */
class TextFieldControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions|null,
     *     PlaceholderOptions?: TextControlPlaceholderOptions|null,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

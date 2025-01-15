<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions|null $TitleOptions
 * @property TextControlPlaceholderOptions|null $PlaceholderOptions
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 */
class TextAreaControlDisplayOptions extends Shape
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

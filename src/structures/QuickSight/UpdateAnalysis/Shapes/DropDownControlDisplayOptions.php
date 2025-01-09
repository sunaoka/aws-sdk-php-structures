<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListControlSelectAllOptions $SelectAllOptions
 * @property LabelOptions $TitleOptions
 * @property SheetControlInfoIconLabelOptions $InfoIconLabelOptions
 */
class DropDownControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     SelectAllOptions?: ListControlSelectAllOptions,
     *     TitleOptions?: LabelOptions,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

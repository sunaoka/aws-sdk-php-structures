<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListControlSelectAllOptions|null $SelectAllOptions
 * @property LabelOptions|null $TitleOptions
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 */
class DropDownControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     SelectAllOptions?: ListControlSelectAllOptions|null,
     *     TitleOptions?: LabelOptions|null,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

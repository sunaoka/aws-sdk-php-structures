<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListControlSearchOptions $SearchOptions
 * @property ListControlSelectAllOptions $SelectAllOptions
 * @property LabelOptions $TitleOptions
 * @property SheetControlInfoIconLabelOptions $InfoIconLabelOptions
 */
class ListControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     SearchOptions?: ListControlSearchOptions,
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

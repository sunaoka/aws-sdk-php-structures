<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListControlSearchOptions|null $SearchOptions
 * @property ListControlSelectAllOptions|null $SelectAllOptions
 * @property LabelOptions|null $TitleOptions
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 */
class ListControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     SearchOptions?: ListControlSearchOptions|null,
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

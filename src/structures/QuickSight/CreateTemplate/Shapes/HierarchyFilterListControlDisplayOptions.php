<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions|null $TitleOptions
 * @property SheetControlInfoIconLabelOptions|null $InfoIconLabelOptions
 * @property HierarchyFilterListControlSearchOptions|null $SearchOptions
 */
class HierarchyFilterListControlDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TitleOptions?: LabelOptions|null,
     *     InfoIconLabelOptions?: SheetControlInfoIconLabelOptions|null,
     *     SearchOptions?: HierarchyFilterListControlSearchOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

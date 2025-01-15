<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceSheetControlId
 * @property ColumnIdentifier|null $ColumnToMatch
 */
class CascadingControlSource extends Shape
{
    /**
     * @param array{
     *     SourceSheetControlId?: string|null,
     *     ColumnToMatch?: ColumnIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

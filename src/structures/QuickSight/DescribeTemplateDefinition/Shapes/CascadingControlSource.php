<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceSheetControlId
 * @property ColumnIdentifier $ColumnToMatch
 */
class CascadingControlSource extends Shape
{
    /**
     * @param array{
     *     SourceSheetControlId?: string,
     *     ColumnToMatch?: ColumnIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

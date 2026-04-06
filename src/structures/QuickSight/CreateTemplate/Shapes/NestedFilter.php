<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property bool $IncludeInnerSet
 * @property InnerFilter $InnerFilter
 */
class NestedFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     IncludeInnerSet: bool,
     *     InnerFilter: InnerFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

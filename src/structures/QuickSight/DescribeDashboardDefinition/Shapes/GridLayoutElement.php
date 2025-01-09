<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElementId
 * @property 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE' $ElementType
 * @property int $ColumnIndex
 * @property int $ColumnSpan
 * @property int $RowIndex
 * @property int $RowSpan
 */
class GridLayoutElement extends Shape
{
    /**
     * @param array{
     *     ElementId: string,
     *     ElementType: 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE',
     *     ColumnIndex?: int,
     *     ColumnSpan: int,
     *     RowIndex?: int,
     *     RowSpan: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

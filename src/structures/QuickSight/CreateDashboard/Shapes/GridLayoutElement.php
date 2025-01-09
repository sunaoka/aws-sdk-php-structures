<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElementId
 * @property 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE' $ElementType
 * @property int<0, 35> $ColumnIndex
 * @property int<1, 36> $ColumnSpan
 * @property int<0, 9009> $RowIndex
 * @property int<1, 21> $RowSpan
 */
class GridLayoutElement extends Shape
{
    /**
     * @param array{
     *     ElementId: string,
     *     ElementType: 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE',
     *     ColumnIndex?: int<0, 35>,
     *     ColumnSpan: int<1, 36>,
     *     RowIndex?: int<0, 9009>,
     *     RowSpan: int<1, 21>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

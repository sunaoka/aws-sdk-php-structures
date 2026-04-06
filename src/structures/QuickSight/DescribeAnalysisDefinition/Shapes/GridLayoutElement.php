<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElementId
 * @property 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE' $ElementType
 * @property int<0, 35>|null $ColumnIndex
 * @property int<1, 36> $ColumnSpan
 * @property int<0, 9009>|null $RowIndex
 * @property int<1, 21> $RowSpan
 */
class GridLayoutElement extends Shape
{
    /**
     * @param array{
     *     ElementId: string,
     *     ElementType: 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE',
     *     ColumnIndex?: int<0, 35>|null,
     *     ColumnSpan: int<1, 36>,
     *     RowIndex?: int<0, 9009>|null,
     *     RowSpan: int<1, 21>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

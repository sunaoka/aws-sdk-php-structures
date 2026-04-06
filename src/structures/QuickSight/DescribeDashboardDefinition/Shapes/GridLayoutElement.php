<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElementId
 * @property 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE' $ElementType
 * @property int<0, 35>|null $ColumnIndex
 * @property int<1, 36> $ColumnSpan
 * @property int<0, 9009>|null $RowIndex
 * @property int<1, 21> $RowSpan
 * @property GridLayoutElementBorderStyle|null $BorderStyle
 * @property GridLayoutElementBorderStyle|null $SelectedBorderStyle
 * @property GridLayoutElementBackgroundStyle|null $BackgroundStyle
 * @property LoadingAnimation|null $LoadingAnimation
 * @property string|null $BorderRadius
 * @property string|null $Padding
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
     *     RowSpan: int<1, 21>,
     *     BorderStyle?: GridLayoutElementBorderStyle|null,
     *     SelectedBorderStyle?: GridLayoutElementBorderStyle|null,
     *     BackgroundStyle?: GridLayoutElementBackgroundStyle|null,
     *     LoadingAnimation?: LoadingAnimation|null,
     *     BorderRadius?: string|null,
     *     Padding?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

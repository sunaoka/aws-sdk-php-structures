<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property FontConfiguration|null $FontConfiguration
 * @property 'NONE'|'WRAP'|null $TextWrap
 * @property 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null $HorizontalTextAlignment
 * @property 'TOP'|'MIDDLE'|'BOTTOM'|'AUTO'|null $VerticalTextAlignment
 * @property string|null $BackgroundColor
 * @property int<8, 500>|null $Height
 * @property GlobalTableBorderOptions|null $Border
 */
class TableCellStyle extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     FontConfiguration?: FontConfiguration|null,
     *     TextWrap?: 'NONE'|'WRAP'|null,
     *     HorizontalTextAlignment?: 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null,
     *     VerticalTextAlignment?: 'TOP'|'MIDDLE'|'BOTTOM'|'AUTO'|null,
     *     BackgroundColor?: string|null,
     *     Height?: int<8, 500>|null,
     *     Border?: GlobalTableBorderOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

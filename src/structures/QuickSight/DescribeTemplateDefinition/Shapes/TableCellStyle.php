<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property FontConfiguration $FontConfiguration
 * @property 'NONE'|'WRAP' $TextWrap
 * @property 'LEFT'|'CENTER'|'RIGHT'|'AUTO' $HorizontalTextAlignment
 * @property 'TOP'|'MIDDLE'|'BOTTOM'|'AUTO' $VerticalTextAlignment
 * @property string $BackgroundColor
 * @property int<8, 500> $Height
 * @property GlobalTableBorderOptions $Border
 */
class TableCellStyle extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     FontConfiguration?: FontConfiguration,
     *     TextWrap?: 'NONE'|'WRAP',
     *     HorizontalTextAlignment?: 'LEFT'|'CENTER'|'RIGHT'|'AUTO',
     *     VerticalTextAlignment?: 'TOP'|'MIDDLE'|'BOTTOM'|'AUTO',
     *     BackgroundColor?: string,
     *     Height?: int<8, 500>,
     *     Border?: GlobalTableBorderOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

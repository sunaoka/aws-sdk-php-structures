<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontSize $FontSize
 * @property 'UNDERLINE'|'NONE' $FontDecoration
 * @property string $FontColor
 * @property FontWeight $FontWeight
 * @property 'NORMAL'|'ITALIC' $FontStyle
 * @property string $FontFamily
 */
class FontConfiguration extends Shape
{
    /**
     * @param array{
     *     FontSize?: FontSize,
     *     FontDecoration?: 'UNDERLINE'|'NONE',
     *     FontColor?: string,
     *     FontWeight?: FontWeight,
     *     FontStyle?: 'NORMAL'|'ITALIC',
     *     FontFamily?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

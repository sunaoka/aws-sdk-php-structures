<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontSize|null $FontSize
 * @property 'UNDERLINE'|'NONE'|null $FontDecoration
 * @property string|null $FontColor
 * @property FontWeight|null $FontWeight
 * @property 'NORMAL'|'ITALIC'|null $FontStyle
 * @property string|null $FontFamily
 */
class FontConfiguration extends Shape
{
    /**
     * @param array{
     *     FontSize?: FontSize|null,
     *     FontDecoration?: 'UNDERLINE'|'NONE'|null,
     *     FontColor?: string|null,
     *     FontWeight?: FontWeight|null,
     *     FontStyle?: 'NORMAL'|'ITALIC'|null,
     *     FontFamily?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

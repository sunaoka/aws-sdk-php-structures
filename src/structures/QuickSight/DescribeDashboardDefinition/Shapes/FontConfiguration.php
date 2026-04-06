<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontSize|null $FontSize
 * @property 'UNDERLINE'|'NONE'|null $FontDecoration
 * @property string|null $FontColor
 * @property FontWeight|null $FontWeight
 * @property 'NORMAL'|'ITALIC'|null $FontStyle
 */
class FontConfiguration extends Shape
{
    /**
     * @param array{
     *     FontSize?: FontSize|null,
     *     FontDecoration?: 'UNDERLINE'|'NONE'|null,
     *     FontColor?: string|null,
     *     FontWeight?: FontWeight|null,
     *     FontStyle?: 'NORMAL'|'ITALIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

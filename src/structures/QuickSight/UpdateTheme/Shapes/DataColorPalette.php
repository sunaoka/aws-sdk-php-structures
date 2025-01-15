<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Colors
 * @property list<string>|null $MinMaxGradient
 * @property string|null $EmptyFillColor
 */
class DataColorPalette extends Shape
{
    /**
     * @param array{
     *     Colors?: list<string>|null,
     *     MinMaxGradient?: list<string>|null,
     *     EmptyFillColor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Colors
 * @property list<string> $MinMaxGradient
 * @property string $EmptyFillColor
 */
class DataColorPalette extends Shape
{
    /**
     * @param array{
     *     Colors?: list<string>,
     *     MinMaxGradient?: list<string>,
     *     EmptyFillColor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

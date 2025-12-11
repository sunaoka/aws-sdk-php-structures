<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Color
 * @property string|null $Gradient
 */
class SheetBackgroundStyle extends Shape
{
    /**
     * @param array{
     *     Color?: string|null,
     *     Gradient?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

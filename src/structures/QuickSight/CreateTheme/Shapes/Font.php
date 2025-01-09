<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FontFamily
 */
class Font extends Shape
{
    /**
     * @param array{FontFamily?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

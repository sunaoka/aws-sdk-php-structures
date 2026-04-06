<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Color
 * @property bool|null $Show
 * @property string|null $Width
 */
class BorderStyle extends Shape
{
    /**
     * @param array{
     *     Color?: string|null,
     *     Show?: bool|null,
     *     Width?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

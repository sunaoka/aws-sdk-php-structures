<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_FAILURE'|null $Type
 * @property string|null $Message
 */
class ThemeError extends Shape
{
    /**
     * @param array{
     *     Type?: 'INTERNAL_FAILURE'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

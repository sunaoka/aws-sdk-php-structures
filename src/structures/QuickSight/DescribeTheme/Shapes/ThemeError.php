<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_FAILURE' $Type
 * @property string $Message
 */
class ThemeError extends Shape
{
    /**
     * @param array{
     *     Type?: 'INTERNAL_FAILURE',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

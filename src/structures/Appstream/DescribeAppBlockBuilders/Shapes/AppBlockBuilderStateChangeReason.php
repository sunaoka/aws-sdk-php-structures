<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR' $Code
 * @property string $Message
 */
class AppBlockBuilderStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

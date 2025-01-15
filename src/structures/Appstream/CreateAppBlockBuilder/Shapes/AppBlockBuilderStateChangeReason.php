<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlockBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|null $Code
 * @property string|null $Message
 */
class AppBlockBuilderStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

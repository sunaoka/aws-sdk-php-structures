<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'IMAGE_UNAVAILABLE' $Code
 * @property string $Message
 */
class ImageBuilderStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|'IMAGE_UNAVAILABLE',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

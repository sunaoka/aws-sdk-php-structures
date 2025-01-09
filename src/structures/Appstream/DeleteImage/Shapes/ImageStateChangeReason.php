<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'IMAGE_BUILDER_NOT_AVAILABLE'|'IMAGE_COPY_FAILURE' $Code
 * @property string $Message
 */
class ImageStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|'IMAGE_BUILDER_NOT_AVAILABLE'|'IMAGE_COPY_FAILURE',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

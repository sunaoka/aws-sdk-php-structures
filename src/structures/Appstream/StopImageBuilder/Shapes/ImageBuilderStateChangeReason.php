<?php

namespace Sunaoka\Aws\Structures\Appstream\StopImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'IMAGE_UNAVAILABLE'|null $Code
 * @property string|null $Message
 */
class ImageBuilderStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|'IMAGE_UNAVAILABLE'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

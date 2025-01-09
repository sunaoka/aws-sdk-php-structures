<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentText $excerpt
 * @property DocumentText $title
 */
class TextData extends Shape
{
    /**
     * @param array{
     *     excerpt?: DocumentText,
     *     title?: DocumentText
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

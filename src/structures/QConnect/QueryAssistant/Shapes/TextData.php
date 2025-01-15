<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentText|null $excerpt
 * @property DocumentText|null $title
 */
class TextData extends Shape
{
    /**
     * @param array{
     *     excerpt?: DocumentText|null,
     *     title?: DocumentText|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

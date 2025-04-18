<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentText|null $title
 * @property DocumentText|null $excerpt
 */
class TextData extends Shape
{
    /**
     * @param array{
     *     title?: DocumentText|null,
     *     excerpt?: DocumentText|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

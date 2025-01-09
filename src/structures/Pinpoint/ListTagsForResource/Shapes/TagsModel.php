<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTagsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $tags
 */
class TagsModel extends Shape
{
    /**
     * @param array{tags: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Page
 * @property int $Count
 */
class ExtractedCharactersListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int,
     *     Count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

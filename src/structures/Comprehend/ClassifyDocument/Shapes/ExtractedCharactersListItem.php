<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Page
 * @property int|null $Count
 */
class ExtractedCharactersListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

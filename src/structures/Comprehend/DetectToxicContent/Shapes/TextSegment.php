<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectToxicContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 */
class TextSegment extends Shape
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

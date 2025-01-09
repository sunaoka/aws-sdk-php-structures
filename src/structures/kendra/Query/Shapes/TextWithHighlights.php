<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property list<Highlight> $Highlights
 */
class TextWithHighlights extends Shape
{
    /**
     * @param array{
     *     Text?: string,
     *     Highlights?: list<Highlight>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

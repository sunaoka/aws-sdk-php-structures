<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property list<Highlight>|null $Highlights
 */
class TextWithHighlights extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     Highlights?: list<Highlight>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

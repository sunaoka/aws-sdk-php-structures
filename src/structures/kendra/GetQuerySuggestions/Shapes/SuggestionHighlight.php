<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BeginOffset
 * @property int $EndOffset
 */
class SuggestionHighlight extends Shape
{
    /**
     * @param array{
     *     BeginOffset?: int,
     *     EndOffset?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

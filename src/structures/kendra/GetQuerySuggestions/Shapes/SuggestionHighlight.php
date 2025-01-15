<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 */
class SuggestionHighlight extends Shape
{
    /**
     * @param array{
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

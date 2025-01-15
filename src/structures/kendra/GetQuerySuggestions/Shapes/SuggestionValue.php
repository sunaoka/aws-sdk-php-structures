<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SuggestionTextWithHighlights|null $Text
 */
class SuggestionValue extends Shape
{
    /**
     * @param array{Text?: SuggestionTextWithHighlights|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

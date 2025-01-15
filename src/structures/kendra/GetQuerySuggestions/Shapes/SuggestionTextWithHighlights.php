<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property list<SuggestionHighlight>|null $Highlights
 */
class SuggestionTextWithHighlights extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     Highlights?: list<SuggestionHighlight>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

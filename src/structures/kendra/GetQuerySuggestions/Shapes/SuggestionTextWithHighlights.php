<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property list<SuggestionHighlight> $Highlights
 */
class SuggestionTextWithHighlights extends Shape
{
    /**
     * @param array{
     *     Text?: string,
     *     Highlights?: list<SuggestionHighlight>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

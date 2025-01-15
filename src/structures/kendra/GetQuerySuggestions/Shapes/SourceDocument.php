<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentId
 * @property list<string>|null $SuggestionAttributes
 * @property list<DocumentAttribute>|null $AdditionalAttributes
 */
class SourceDocument extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string|null,
     *     SuggestionAttributes?: list<string>|null,
     *     AdditionalAttributes?: list<DocumentAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

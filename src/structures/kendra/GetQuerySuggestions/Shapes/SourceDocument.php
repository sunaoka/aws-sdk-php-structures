<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentId
 * @property list<string> $SuggestionAttributes
 * @property list<DocumentAttribute> $AdditionalAttributes
 */
class SourceDocument extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string,
     *     SuggestionAttributes?: list<string>,
     *     AdditionalAttributes?: list<DocumentAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

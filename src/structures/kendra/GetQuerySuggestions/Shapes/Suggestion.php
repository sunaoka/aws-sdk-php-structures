<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property SuggestionValue $Value
 * @property list<SourceDocument> $SourceDocuments
 */
class Suggestion extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Value?: SuggestionValue,
     *     SourceDocuments?: list<SourceDocument>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

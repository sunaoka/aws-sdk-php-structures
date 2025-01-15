<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property SuggestionValue|null $Value
 * @property list<SourceDocument>|null $SourceDocuments
 */
class Suggestion extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Value?: SuggestionValue|null,
     *     SourceDocuments?: list<SourceDocument>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $QueryText
 * @property int $MaxSuggestionsCount
 * @property list<'QUERY'|'DOCUMENT_ATTRIBUTES'> $SuggestionTypes
 * @property Shapes\AttributeSuggestionsGetConfig $AttributeSuggestionsConfig
 */
class GetQuerySuggestionsRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryText: string,
     *     MaxSuggestionsCount?: int,
     *     SuggestionTypes?: list<'QUERY'|'DOCUMENT_ATTRIBUTES'>,
     *     AttributeSuggestionsConfig?: Shapes\AttributeSuggestionsGetConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

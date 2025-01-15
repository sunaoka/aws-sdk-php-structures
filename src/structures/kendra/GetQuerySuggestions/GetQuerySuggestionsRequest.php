<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $QueryText
 * @property int|null $MaxSuggestionsCount
 * @property list<'QUERY'|'DOCUMENT_ATTRIBUTES'>|null $SuggestionTypes
 * @property Shapes\AttributeSuggestionsGetConfig|null $AttributeSuggestionsConfig
 */
class GetQuerySuggestionsRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryText: string,
     *     MaxSuggestionsCount?: int|null,
     *     SuggestionTypes?: list<'QUERY'|'DOCUMENT_ATTRIBUTES'>|null,
     *     AttributeSuggestionsConfig?: Shapes\AttributeSuggestionsGetConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

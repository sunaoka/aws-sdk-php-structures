<?php

namespace Sunaoka\Aws\Structures\kendra\GetQuerySuggestions;

trait GetQuerySuggestionsTrait
{
    /**
     * @param GetQuerySuggestionsRequest $args
     * @return GetQuerySuggestionsResponse
     */
    public function getQuerySuggestions(GetQuerySuggestionsRequest $args)
    {
        $result = parent::getQuerySuggestions($args->toArray());
        return new GetQuerySuggestionsResponse($result->toArray());
    }
}

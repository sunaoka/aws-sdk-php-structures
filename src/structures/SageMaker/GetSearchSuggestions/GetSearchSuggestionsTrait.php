<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions;

trait GetSearchSuggestionsTrait
{
    /**
     * @param GetSearchSuggestionsRequest $args
     * @return GetSearchSuggestionsResponse
     */
    public function getSearchSuggestions(GetSearchSuggestionsRequest $args)
    {
        $result = parent::getSearchSuggestions($args->toArray());
        return new GetSearchSuggestionsResponse($result->toArray());
    }
}

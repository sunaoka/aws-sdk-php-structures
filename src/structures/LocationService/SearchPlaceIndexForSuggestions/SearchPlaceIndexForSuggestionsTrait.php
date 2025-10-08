<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions;

trait SearchPlaceIndexForSuggestionsTrait
{
    /**
     * @param SearchPlaceIndexForSuggestionsRequest $args
     * @return SearchPlaceIndexForSuggestionsResponse
     */
    public function searchPlaceIndexForSuggestions(SearchPlaceIndexForSuggestionsRequest $args)
    {
        $result = parent::searchPlaceIndexForSuggestions($args->toArray());
        return new SearchPlaceIndexForSuggestionsResponse($result->toArray());
    }
}

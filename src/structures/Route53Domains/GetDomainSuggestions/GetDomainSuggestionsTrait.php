<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainSuggestions;

trait GetDomainSuggestionsTrait
{
    /**
     * @param GetDomainSuggestionsRequest $args
     * @return GetDomainSuggestionsResponse
     */
    public function getDomainSuggestions(GetDomainSuggestionsRequest $args)
    {
        $result = parent::getDomainSuggestions($args->toArray());
        return new GetDomainSuggestionsResponse($result->toArray());
    }
}

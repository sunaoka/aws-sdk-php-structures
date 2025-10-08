<?php

namespace Sunaoka\Aws\Structures\kendra\ListQuerySuggestionsBlockLists;

trait ListQuerySuggestionsBlockListsTrait
{
    /**
     * @param ListQuerySuggestionsBlockListsRequest $args
     * @return ListQuerySuggestionsBlockListsResponse
     */
    public function listQuerySuggestionsBlockLists(ListQuerySuggestionsBlockListsRequest $args)
    {
        $result = parent::listQuerySuggestionsBlockLists($args->toArray());
        return new ListQuerySuggestionsBlockListsResponse($result->toArray());
    }
}

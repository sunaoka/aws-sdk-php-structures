<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts;

trait SearchContactsTrait
{
    /**
     * @param SearchContactsRequest $args
     * @return SearchContactsResponse
     */
    public function searchContacts(SearchContactsRequest $args)
    {
        $result = parent::searchContacts($args->toArray());
        return new SearchContactsResponse($result->toArray());
    }
}

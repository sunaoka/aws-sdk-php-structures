<?php

namespace Sunaoka\Aws\Structures\Connect\ListAssociatedContacts;

trait ListAssociatedContactsTrait
{
    /**
     * @param ListAssociatedContactsRequest $args
     * @return ListAssociatedContactsResponse
     */
    public function listAssociatedContacts(ListAssociatedContactsRequest $args)
    {
        $result = parent::listAssociatedContacts($args->toArray());
        return new ListAssociatedContactsResponse($result->toArray());
    }
}

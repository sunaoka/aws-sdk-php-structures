<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\ListEmailContacts;

trait ListEmailContactsTrait
{
    /**
     * @param ListEmailContactsRequest $args
     * @return ListEmailContactsResponse
     */
    public function listEmailContacts(ListEmailContactsRequest $args)
    {
        $result = parent::listEmailContacts($args->toArray());
        return new ListEmailContactsResponse($result->toArray());
    }
}

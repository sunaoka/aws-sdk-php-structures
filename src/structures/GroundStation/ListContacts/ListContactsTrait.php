<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts;

trait ListContactsTrait
{
    /**
     * @param ListContactsRequest $args
     * @return ListContactsResponse
     */
    public function listContacts(ListContactsRequest $args)
    {
        $result = parent::listContacts($args->toArray());
        return new ListContactsResponse($result->toArray());
    }
}

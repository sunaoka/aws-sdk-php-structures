<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContactLists;

trait ListContactListsTrait
{
    /**
     * @param ListContactListsRequest $args
     * @return ListContactListsResponse
     */
    public function listContactLists(ListContactListsRequest $args)
    {
        $result = parent::listContactLists($args->toArray());
        return new ListContactListsResponse($result->toArray());
    }
}

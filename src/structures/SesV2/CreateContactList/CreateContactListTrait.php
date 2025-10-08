<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateContactList;

trait CreateContactListTrait
{
    /**
     * @param CreateContactListRequest $args
     * @return CreateContactListResponse
     */
    public function createContactList(CreateContactListRequest $args)
    {
        $result = parent::createContactList($args->toArray());
        return new CreateContactListResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContactList;

trait GetContactListTrait
{
    /**
     * @param GetContactListRequest $args
     * @return GetContactListResponse
     */
    public function getContactList(GetContactListRequest $args)
    {
        $result = parent::getContactList($args->toArray());
        return new GetContactListResponse($result->toArray());
    }
}

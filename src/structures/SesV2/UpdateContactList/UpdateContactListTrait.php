<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateContactList;

trait UpdateContactListTrait
{
    /**
     * @param UpdateContactListRequest $args
     * @return UpdateContactListResponse
     */
    public function updateContactList(UpdateContactListRequest $args)
    {
        $result = parent::updateContactList($args->toArray());
        return new UpdateContactListResponse($result->toArray());
    }
}

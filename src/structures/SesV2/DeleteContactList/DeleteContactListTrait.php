<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteContactList;

trait DeleteContactListTrait
{
    /**
     * @param DeleteContactListRequest $args
     * @return DeleteContactListResponse
     */
    public function deleteContactList(DeleteContactListRequest $args)
    {
        $result = parent::deleteContactList($args->toArray());
        return new DeleteContactListResponse($result->toArray());
    }
}

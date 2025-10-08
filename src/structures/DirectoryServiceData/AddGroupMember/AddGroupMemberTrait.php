<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\AddGroupMember;

trait AddGroupMemberTrait
{
    /**
     * @param AddGroupMemberRequest $args
     * @return AddGroupMemberResponse
     */
    public function addGroupMember(AddGroupMemberRequest $args)
    {
        $result = parent::addGroupMember($args->toArray());
        return new AddGroupMemberResponse($result->toArray());
    }
}

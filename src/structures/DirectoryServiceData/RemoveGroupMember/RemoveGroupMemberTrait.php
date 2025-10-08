<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\RemoveGroupMember;

trait RemoveGroupMemberTrait
{
    /**
     * @param RemoveGroupMemberRequest $args
     * @return RemoveGroupMemberResponse
     */
    public function removeGroupMember(RemoveGroupMemberRequest $args)
    {
        $result = parent::removeGroupMember($args->toArray());
        return new RemoveGroupMemberResponse($result->toArray());
    }
}

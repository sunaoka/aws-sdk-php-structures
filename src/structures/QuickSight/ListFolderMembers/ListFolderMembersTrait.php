<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolderMembers;

trait ListFolderMembersTrait
{
    /**
     * @param ListFolderMembersRequest $args
     * @return ListFolderMembersResponse
     */
    public function listFolderMembers(ListFolderMembersRequest $args)
    {
        $result = parent::listFolderMembers($args->toArray());
        return new ListFolderMembersResponse($result->toArray());
    }
}

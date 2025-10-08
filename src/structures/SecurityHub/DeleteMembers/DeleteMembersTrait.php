<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteMembers;

trait DeleteMembersTrait
{
    /**
     * @param DeleteMembersRequest $args
     * @return DeleteMembersResponse
     */
    public function deleteMembers(DeleteMembersRequest $args)
    {
        $result = parent::deleteMembers($args->toArray());
        return new DeleteMembersResponse($result->toArray());
    }
}

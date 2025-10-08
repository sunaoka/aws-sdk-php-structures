<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DeleteGroup;

trait DeleteGroupTrait
{
    /**
     * @param DeleteGroupRequest $args
     * @return DeleteGroupResponse
     */
    public function deleteGroup(DeleteGroupRequest $args)
    {
        $result = parent::deleteGroup($args->toArray());
        return new DeleteGroupResponse($result->toArray());
    }
}

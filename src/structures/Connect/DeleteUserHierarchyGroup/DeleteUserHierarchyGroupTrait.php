<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteUserHierarchyGroup;

trait DeleteUserHierarchyGroupTrait
{
    /**
     * @param DeleteUserHierarchyGroupRequest $args
     * @return void
     */
    public function deleteUserHierarchyGroup(DeleteUserHierarchyGroupRequest $args)
    {
        parent::deleteUserHierarchyGroup($args->toArray());
    }
}

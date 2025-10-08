<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyGroupName;

trait UpdateUserHierarchyGroupNameTrait
{
    /**
     * @param UpdateUserHierarchyGroupNameRequest $args
     * @return void
     */
    public function updateUserHierarchyGroupName(UpdateUserHierarchyGroupNameRequest $args)
    {
        parent::updateUserHierarchyGroupName($args->toArray());
    }
}

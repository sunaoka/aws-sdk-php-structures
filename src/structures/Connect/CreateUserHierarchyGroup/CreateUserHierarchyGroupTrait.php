<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUserHierarchyGroup;

trait CreateUserHierarchyGroupTrait
{
    /**
     * @param CreateUserHierarchyGroupRequest $args
     * @return CreateUserHierarchyGroupResponse
     */
    public function createUserHierarchyGroup(CreateUserHierarchyGroupRequest $args)
    {
        $result = parent::createUserHierarchyGroup($args->toArray());
        return new CreateUserHierarchyGroupResponse($result->toArray());
    }
}

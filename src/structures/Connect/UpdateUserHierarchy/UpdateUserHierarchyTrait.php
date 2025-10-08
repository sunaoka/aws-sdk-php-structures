<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchy;

trait UpdateUserHierarchyTrait
{
    /**
     * @param UpdateUserHierarchyRequest $args
     * @return void
     */
    public function updateUserHierarchy(UpdateUserHierarchyRequest $args)
    {
        parent::updateUserHierarchy($args->toArray());
    }
}

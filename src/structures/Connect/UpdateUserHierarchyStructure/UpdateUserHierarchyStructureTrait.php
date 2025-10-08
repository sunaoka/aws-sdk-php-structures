<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyStructure;

trait UpdateUserHierarchyStructureTrait
{
    /**
     * @param UpdateUserHierarchyStructureRequest $args
     * @return void
     */
    public function updateUserHierarchyStructure(UpdateUserHierarchyStructureRequest $args)
    {
        parent::updateUserHierarchyStructure($args->toArray());
    }
}

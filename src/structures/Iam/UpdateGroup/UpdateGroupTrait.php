<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateGroup;

trait UpdateGroupTrait
{
    /**
     * @param UpdateGroupRequest $args
     * @return void
     */
    public function updateGroup(UpdateGroupRequest $args)
    {
        parent::updateGroup($args->toArray());
    }
}

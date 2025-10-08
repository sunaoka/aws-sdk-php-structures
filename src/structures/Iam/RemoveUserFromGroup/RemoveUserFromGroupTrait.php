<?php

namespace Sunaoka\Aws\Structures\Iam\RemoveUserFromGroup;

trait RemoveUserFromGroupTrait
{
    /**
     * @param RemoveUserFromGroupRequest $args
     * @return void
     */
    public function removeUserFromGroup(RemoveUserFromGroupRequest $args)
    {
        parent::removeUserFromGroup($args->toArray());
    }
}

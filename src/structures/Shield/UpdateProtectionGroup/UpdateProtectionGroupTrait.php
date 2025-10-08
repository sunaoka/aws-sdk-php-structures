<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateProtectionGroup;

trait UpdateProtectionGroupTrait
{
    /**
     * @param UpdateProtectionGroupRequest $args
     * @return UpdateProtectionGroupResponse
     */
    public function updateProtectionGroup(UpdateProtectionGroupRequest $args)
    {
        $result = parent::updateProtectionGroup($args->toArray());
        return new UpdateProtectionGroupResponse($result->toArray());
    }
}

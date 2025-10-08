<?php

namespace Sunaoka\Aws\Structures\Shield\DeleteProtectionGroup;

trait DeleteProtectionGroupTrait
{
    /**
     * @param DeleteProtectionGroupRequest $args
     * @return DeleteProtectionGroupResponse
     */
    public function deleteProtectionGroup(DeleteProtectionGroupRequest $args)
    {
        $result = parent::deleteProtectionGroup($args->toArray());
        return new DeleteProtectionGroupResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Shield\ListResourcesInProtectionGroup;

trait ListResourcesInProtectionGroupTrait
{
    /**
     * @param ListResourcesInProtectionGroupRequest $args
     * @return ListResourcesInProtectionGroupResponse
     */
    public function listResourcesInProtectionGroup(ListResourcesInProtectionGroupRequest $args)
    {
        $result = parent::listResourcesInProtectionGroup($args->toArray());
        return new ListResourcesInProtectionGroupResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Shield\CreateProtectionGroup;

trait CreateProtectionGroupTrait
{
    /**
     * @param CreateProtectionGroupRequest $args
     * @return CreateProtectionGroupResponse
     */
    public function createProtectionGroup(CreateProtectionGroupRequest $args)
    {
        $result = parent::createProtectionGroup($args->toArray());
        return new CreateProtectionGroupResponse($result->toArray());
    }
}

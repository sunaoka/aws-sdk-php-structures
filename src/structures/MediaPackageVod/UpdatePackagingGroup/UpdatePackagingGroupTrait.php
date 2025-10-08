<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\UpdatePackagingGroup;

trait UpdatePackagingGroupTrait
{
    /**
     * @param UpdatePackagingGroupRequest $args
     * @return UpdatePackagingGroupResponse
     */
    public function updatePackagingGroup(UpdatePackagingGroupRequest $args)
    {
        $result = parent::updatePackagingGroup($args->toArray());
        return new UpdatePackagingGroupResponse($result->toArray());
    }
}

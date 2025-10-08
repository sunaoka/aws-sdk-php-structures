<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DeletePackagingGroup;

trait DeletePackagingGroupTrait
{
    /**
     * @param DeletePackagingGroupRequest $args
     * @return DeletePackagingGroupResponse
     */
    public function deletePackagingGroup(DeletePackagingGroupRequest $args)
    {
        $result = parent::deletePackagingGroup($args->toArray());
        return new DeletePackagingGroupResponse($result->toArray());
    }
}

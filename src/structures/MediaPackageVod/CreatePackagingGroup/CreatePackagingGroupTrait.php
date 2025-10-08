<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingGroup;

trait CreatePackagingGroupTrait
{
    /**
     * @param CreatePackagingGroupRequest $args
     * @return CreatePackagingGroupResponse
     */
    public function createPackagingGroup(CreatePackagingGroupRequest $args)
    {
        $result = parent::createPackagingGroup($args->toArray());
        return new CreatePackagingGroupResponse($result->toArray());
    }
}

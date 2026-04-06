<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroup;

trait UpdatePackageGroupTrait
{
    /**
     * @param UpdatePackageGroupRequest $args
     * @return UpdatePackageGroupResponse
     */
    public function updatePackageGroup(UpdatePackageGroupRequest $args)
    {
        $result = parent::updatePackageGroup($args->toArray());
        return new UpdatePackageGroupResponse($result->toArray());
    }
}

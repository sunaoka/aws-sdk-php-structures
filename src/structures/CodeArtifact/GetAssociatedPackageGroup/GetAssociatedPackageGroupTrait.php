<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetAssociatedPackageGroup;

trait GetAssociatedPackageGroupTrait
{
    /**
     * @param GetAssociatedPackageGroupRequest $args
     * @return GetAssociatedPackageGroupResponse
     */
    public function getAssociatedPackageGroup(GetAssociatedPackageGroupRequest $args)
    {
        $result = parent::getAssociatedPackageGroup($args->toArray());
        return new GetAssociatedPackageGroupResponse($result->toArray());
    }
}

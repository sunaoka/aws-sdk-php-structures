<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreatePackageGroup;

trait CreatePackageGroupTrait
{
    /**
     * @param CreatePackageGroupRequest $args
     * @return CreatePackageGroupResponse
     */
    public function createPackageGroup(CreatePackageGroupRequest $args)
    {
        $result = parent::createPackageGroup($args->toArray());
        return new CreatePackageGroupResponse($result->toArray());
    }
}

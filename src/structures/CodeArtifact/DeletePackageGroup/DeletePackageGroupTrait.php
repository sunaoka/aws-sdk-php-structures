<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageGroup;

trait DeletePackageGroupTrait
{
    /**
     * @param DeletePackageGroupRequest $args
     * @return DeletePackageGroupResponse
     */
    public function deletePackageGroup(DeletePackageGroupRequest $args)
    {
        $result = parent::deletePackageGroup($args->toArray());
        return new DeletePackageGroupResponse($result->toArray());
    }
}

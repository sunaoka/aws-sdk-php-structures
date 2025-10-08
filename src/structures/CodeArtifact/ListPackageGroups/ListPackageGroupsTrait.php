<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageGroups;

trait ListPackageGroupsTrait
{
    /**
     * @param ListPackageGroupsRequest $args
     * @return ListPackageGroupsResponse
     */
    public function listPackageGroups(ListPackageGroupsRequest $args)
    {
        $result = parent::listPackageGroups($args->toArray());
        return new ListPackageGroupsResponse($result->toArray());
    }
}

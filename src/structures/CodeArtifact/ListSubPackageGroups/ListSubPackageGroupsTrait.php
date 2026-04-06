<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListSubPackageGroups;

trait ListSubPackageGroupsTrait
{
    /**
     * @param ListSubPackageGroupsRequest $args
     * @return ListSubPackageGroupsResponse
     */
    public function listSubPackageGroups(ListSubPackageGroupsRequest $args)
    {
        $result = parent::listSubPackageGroups($args->toArray());
        return new ListSubPackageGroupsResponse($result->toArray());
    }
}

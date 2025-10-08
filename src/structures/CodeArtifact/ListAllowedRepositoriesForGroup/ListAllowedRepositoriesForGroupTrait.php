<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAllowedRepositoriesForGroup;

trait ListAllowedRepositoriesForGroupTrait
{
    /**
     * @param ListAllowedRepositoriesForGroupRequest $args
     * @return ListAllowedRepositoriesForGroupResponse
     */
    public function listAllowedRepositoriesForGroup(ListAllowedRepositoriesForGroupRequest $args)
    {
        $result = parent::listAllowedRepositoriesForGroup($args->toArray());
        return new ListAllowedRepositoriesForGroupResponse($result->toArray());
    }
}

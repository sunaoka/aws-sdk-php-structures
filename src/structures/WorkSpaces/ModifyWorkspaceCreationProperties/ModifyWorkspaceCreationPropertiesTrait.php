<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceCreationProperties;

trait ModifyWorkspaceCreationPropertiesTrait
{
    /**
     * @param ModifyWorkspaceCreationPropertiesRequest $args
     * @return ModifyWorkspaceCreationPropertiesResponse
     */
    public function modifyWorkspaceCreationProperties(ModifyWorkspaceCreationPropertiesRequest $args)
    {
        $result = parent::modifyWorkspaceCreationProperties($args->toArray());
        return new ModifyWorkspaceCreationPropertiesResponse($result->toArray());
    }
}

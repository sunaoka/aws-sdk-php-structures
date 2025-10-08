<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceProperties;

trait ModifyWorkspacePropertiesTrait
{
    /**
     * @param ModifyWorkspacePropertiesRequest $args
     * @return ModifyWorkspacePropertiesResponse
     */
    public function modifyWorkspaceProperties(ModifyWorkspacePropertiesRequest $args)
    {
        $result = parent::modifyWorkspaceProperties($args->toArray());
        return new ModifyWorkspacePropertiesResponse($result->toArray());
    }
}

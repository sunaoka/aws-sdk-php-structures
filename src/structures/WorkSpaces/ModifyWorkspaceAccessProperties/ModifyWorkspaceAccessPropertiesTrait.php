<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceAccessProperties;

trait ModifyWorkspaceAccessPropertiesTrait
{
    /**
     * @param ModifyWorkspaceAccessPropertiesRequest $args
     * @return ModifyWorkspaceAccessPropertiesResponse
     */
    public function modifyWorkspaceAccessProperties(ModifyWorkspaceAccessPropertiesRequest $args)
    {
        $result = parent::modifyWorkspaceAccessProperties($args->toArray());
        return new ModifyWorkspaceAccessPropertiesResponse($result->toArray());
    }
}

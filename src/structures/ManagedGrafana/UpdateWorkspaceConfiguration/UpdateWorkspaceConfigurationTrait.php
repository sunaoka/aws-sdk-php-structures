<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceConfiguration;

trait UpdateWorkspaceConfigurationTrait
{
    /**
     * @param UpdateWorkspaceConfigurationRequest $args
     * @return UpdateWorkspaceConfigurationResponse
     */
    public function updateWorkspaceConfiguration(UpdateWorkspaceConfigurationRequest $args)
    {
        $result = parent::updateWorkspaceConfiguration($args->toArray());
        return new UpdateWorkspaceConfigurationResponse($result->toArray());
    }
}

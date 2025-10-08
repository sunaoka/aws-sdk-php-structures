<?php

namespace Sunaoka\Aws\Structures\SupportApp\DeleteSlackWorkspaceConfiguration;

trait DeleteSlackWorkspaceConfigurationTrait
{
    /**
     * @param DeleteSlackWorkspaceConfigurationRequest $args
     * @return DeleteSlackWorkspaceConfigurationResponse
     */
    public function deleteSlackWorkspaceConfiguration(DeleteSlackWorkspaceConfigurationRequest $args)
    {
        $result = parent::deleteSlackWorkspaceConfiguration($args->toArray());
        return new DeleteSlackWorkspaceConfigurationResponse($result->toArray());
    }
}

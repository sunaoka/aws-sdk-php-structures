<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackWorkspaceConfigurations;

trait ListSlackWorkspaceConfigurationsTrait
{
    /**
     * @param ListSlackWorkspaceConfigurationsRequest $args
     * @return ListSlackWorkspaceConfigurationsResponse
     */
    public function listSlackWorkspaceConfigurations(ListSlackWorkspaceConfigurationsRequest $args)
    {
        $result = parent::listSlackWorkspaceConfigurations($args->toArray());
        return new ListSlackWorkspaceConfigurationsResponse($result->toArray());
    }
}

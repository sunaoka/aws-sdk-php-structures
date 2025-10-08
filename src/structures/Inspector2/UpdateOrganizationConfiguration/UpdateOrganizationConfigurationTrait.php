<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateOrganizationConfiguration;

trait UpdateOrganizationConfigurationTrait
{
    /**
     * @param UpdateOrganizationConfigurationRequest $args
     * @return UpdateOrganizationConfigurationResponse
     */
    public function updateOrganizationConfiguration(UpdateOrganizationConfigurationRequest $args)
    {
        $result = parent::updateOrganizationConfiguration($args->toArray());
        return new UpdateOrganizationConfigurationResponse($result->toArray());
    }
}

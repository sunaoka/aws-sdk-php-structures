<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateOrganizationConfiguration;

trait UpdateOrganizationConfigurationTrait
{
    /**
     * @param UpdateOrganizationConfigurationRequest $args
     * @return void
     */
    public function updateOrganizationConfiguration(UpdateOrganizationConfigurationRequest $args)
    {
        parent::updateOrganizationConfiguration($args->toArray());
    }
}

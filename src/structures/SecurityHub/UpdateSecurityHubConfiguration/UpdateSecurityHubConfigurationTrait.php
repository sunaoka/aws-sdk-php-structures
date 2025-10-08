<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateSecurityHubConfiguration;

trait UpdateSecurityHubConfigurationTrait
{
    /**
     * @param UpdateSecurityHubConfigurationRequest $args
     * @return UpdateSecurityHubConfigurationResponse
     */
    public function updateSecurityHubConfiguration(UpdateSecurityHubConfigurationRequest $args)
    {
        $result = parent::updateSecurityHubConfiguration($args->toArray());
        return new UpdateSecurityHubConfigurationResponse($result->toArray());
    }
}

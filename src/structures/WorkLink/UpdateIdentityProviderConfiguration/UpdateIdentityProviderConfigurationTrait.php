<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateIdentityProviderConfiguration;

trait UpdateIdentityProviderConfigurationTrait
{
    /**
     * @param UpdateIdentityProviderConfigurationRequest $args
     * @return UpdateIdentityProviderConfigurationResponse
     */
    public function updateIdentityProviderConfiguration(UpdateIdentityProviderConfigurationRequest $args)
    {
        $result = parent::updateIdentityProviderConfiguration($args->toArray());
        return new UpdateIdentityProviderConfigurationResponse($result->toArray());
    }
}

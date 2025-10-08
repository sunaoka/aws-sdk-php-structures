<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstanceAccessControlAttributeConfiguration;

trait UpdateInstanceAccessControlAttributeConfigurationTrait
{
    /**
     * @param UpdateInstanceAccessControlAttributeConfigurationRequest $args
     * @return UpdateInstanceAccessControlAttributeConfigurationResponse
     */
    public function updateInstanceAccessControlAttributeConfiguration(
        UpdateInstanceAccessControlAttributeConfigurationRequest $args,
    ) {
        $result = parent::updateInstanceAccessControlAttributeConfiguration($args->toArray());
        return new UpdateInstanceAccessControlAttributeConfigurationResponse($result->toArray());
    }
}

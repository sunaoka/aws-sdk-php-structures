<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateAccessControlConfiguration;

trait UpdateAccessControlConfigurationTrait
{
    /**
     * @param UpdateAccessControlConfigurationRequest $args
     * @return UpdateAccessControlConfigurationResponse
     */
    public function updateAccessControlConfiguration(UpdateAccessControlConfigurationRequest $args)
    {
        $result = parent::updateAccessControlConfiguration($args->toArray());
        return new UpdateAccessControlConfigurationResponse($result->toArray());
    }
}

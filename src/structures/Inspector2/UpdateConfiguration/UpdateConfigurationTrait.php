<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration;

trait UpdateConfigurationTrait
{
    /**
     * @param UpdateConfigurationRequest $args
     * @return UpdateConfigurationResponse
     */
    public function updateConfiguration(UpdateConfigurationRequest $args)
    {
        $result = parent::updateConfiguration($args->toArray());
        return new UpdateConfigurationResponse($result->toArray());
    }
}

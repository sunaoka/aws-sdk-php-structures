<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateSystemTableConfiguration;

trait UpdateSystemTableConfigurationTrait
{
    /**
     * @param UpdateSystemTableConfigurationRequest $args
     * @return UpdateSystemTableConfigurationResponse
     */
    public function updateSystemTableConfiguration(UpdateSystemTableConfigurationRequest $args)
    {
        $result = parent::updateSystemTableConfiguration($args->toArray());
        return new UpdateSystemTableConfigurationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateAdConfiguration;

trait UpdateAdConfigurationTrait
{
    /**
     * @param UpdateAdConfigurationRequest $args
     * @return UpdateAdConfigurationResponse
     */
    public function updateAdConfiguration(UpdateAdConfigurationRequest $args)
    {
        $result = parent::updateAdConfiguration($args->toArray());
        return new UpdateAdConfigurationResponse($result->toArray());
    }
}
